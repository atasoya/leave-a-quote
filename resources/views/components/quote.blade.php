<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<form action="{{ route('quotes.interaction') }}" method="post">
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
                "{{$quote}}"
            </p>
        </div>
        <div class="interactions space-x-2">
            <i class="fa-regular fa-heart like-icon hover:cursor-pointer" data-action="like" data-id="{{$id}}" data-liked="false"></i>
            <i class="fa-regular fa-flag hover:cursor-pointer" data-action="flag" data-id="{{$id}}" data-flagged="false"></i>
        </div>
        <div class="divider"></div>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const interactionElements = document.querySelectorAll('.interactions i');

        interactionElements.forEach(function(element) {
            element.addEventListener('click', function() {
                let action = this.getAttribute('data-action');
                let quoteId = this.getAttribute('data-id');
                let isActive = this.getAttribute('data-' + action + 'd') === 'true';
                console.log(`Initial state for ${action} on quote ${quoteId}: ${this.getAttribute('data-' + action + 'd')}`);
                handleInteraction(action, quoteId, this, !isActive);
            });
        });
    });

    function handleInteraction(action, quoteId, element, activate) {
       
        
        let url = '{{ route('quotes.interaction') }}';
        let formData = new FormData();
        formData.append('id', quoteId);
        formData.append('action', action);
        formData.append('activate', activate);
        formData.append('_token', '{{ csrf_token() }}');

        fetch(url, {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
               
                if (action === 'like') {
                    element.style.color = activate ? '#FF6961' : ''; 
                    element.setAttribute('data-liked', activate.toString());
                } else if (action === 'flag') {
                    element.style.color = activate ? '#99c5c4' : ''; 
                    element.setAttribute('data-liked', activate.toString());
                   
                }
               
            } else {
                console.error('Action failed:', data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    }
</script>

</body>
</html>
