<form action="{{ route('quotes.like') }}" method="post">
    <div class="quote-card w-96 flex flex-col h-fit space-y-1" id="{{$id}}">
        <div class="quote-header flex space-x-2">
            <p class="font-bold text-sm">
                {{$writer}}
            </p>
            <span class="text-sm">•</span>
            <p class="font-light text-sm">
                {{$date->diffForHumans()}}
            </p>
        </div>
        <div class="quote">
            <p class="italic">
               {{$quote}}
            </p>
        </div>
        <div class="interactions space-x-2">
            <i class="fa-regular fa-heart like-icon hover:cursor-pointer" data-action="like" data-id="{{$id}}" id="heart-{{$id}}"></i>
            <i class="fa-regular fa-flag hover:cursor-pointer" data-action="flag" data-id="{{$id}}" id="flag-{{$id}}"></i>
        </div>
        <div class="divider"></div>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.interactions i').forEach(function(element) {
            element.addEventListener('click', function() {
                let action = this.getAttribute('data-action');
                let quoteId = this.getAttribute('data-id');
                handleInteraction(action, quoteId, this);
            });
        });
    });

    function handleInteraction(action, quoteId, element) {
        let url = action === 'like' ? '{{ route('quotes.like') }}' : '{{ route('quotes.flag') }}';
        let formData = new FormData();
        formData.append('id', quoteId);
        formData.append('action', action);
        formData.append('_token', '{{ csrf_token() }}'); 

        fetch(url, {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log(`${action} action was successful.`);
                if (action === 'like') {
                    element.style.color = '#FF6961'; // Change the heart color to FF6961
                } else if (action === 'flag') {
                    element.style.color = '#99c5c4'; // Change the flag color to 99c5c4
                }
            } else {
                console.error('Action failed:', data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    }
</script>
