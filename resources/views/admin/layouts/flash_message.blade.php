@if (session('status') == trans('welcome.update_msg') || session('status') == trans('welcome.remove_msg') || session('status') == trans('welcome.building_remove_msg'))
    <script>
        swal(
                "{{ session('status') }}",
                "{{ trans('welcome.success_msg') }}",
                "success"
        );
        document.getElementsByClassName('confirm')[0].innerText = '{{ trans('welcome.accept') }}';
    </script>
@elseif(session('status'))
    <script>
        swal({
            title: "{{ session('status') }}",
            text: "{{ trans('welcome.close_msg') }}",
            timer: 2000,
            showConfirmButton: false
        });
    </script>
@elseif(session('status_for_update_building'))
    <script>
        swal(
                "{{ session('status_for_update_building') }}",
                "{{ trans('welcome.success_msg') }}",
                "success"
        );
        document.getElementsByClassName('confirm')[0].innerText = '{{ trans('welcome.accept') }}';
    </script>
@endif
