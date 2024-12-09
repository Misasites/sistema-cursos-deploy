{{--@if (session('success'))--}}
{{--    <div class="alert alert-success" role="alert">--}}
{{--        {{ session('success') }}--}}
{{--    </div>--}}
{{--@endif--}}

{{--@if (session('error'))--}}
{{--    <div class="alert alert-danger" role="alert">--}}
{{--        {{ session('error') }}--}}
{{--    </div>--}}
{{--@endif--}}

{{--@if ($errors->any())--}}
{{--    <div class="alert alert-danger" role="alert">--}}
{{--        @foreach ($errors->all() as $error)--}}
{{--            {{ $error }}<br>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--@endif--}}



@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire('Pronto!', "{{ session('success') }}", 'success');
            icon: "question"
        })
    </script>
@endif


{{--Mensagem de erro--}}
@if ($errors->any())
    @php
        $mensagem ='';
        foreach($errors->all() as $error) {
            $mensagem .= $error . '<br>';
            }
    @endphp
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire('Error!', "{!! $mensagem !!}", 'error');
            icon: "question"
        })
    </script>
@endif
