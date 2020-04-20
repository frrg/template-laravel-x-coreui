@if (session()->has('flash_notification'))
<script>
$.toast({
    heading: "{!! session()->get('flash_notification.title') !!}",
    text: "{!! session()->get('flash_notification.message') !!}",
    showHideTransition: 'fade', //plain, fade, slide
    icon: "{{ session()->get('flash_notification.level') }}",
    position: 'top-right',
    allowToastClose: false,
    textAlign: 'center',
    stack: false,
    hideAfter: 3000   // in milli seconds
})
</script>

@endif
