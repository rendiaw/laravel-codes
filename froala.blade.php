@push('css')
<link href="{{ asset('froala/css/froala_editor.pkgd.min.css') }}" rel="stylesheet">
@endpush

@push('js')
<script src="{{ asset('froala/js/froala_editor.pkgd.min.js') }}"></script>
<script>
  var editor = new FroalaEditor('.text-editor',{
    key: "xxxxx",
    imageUploadURL: "{{ route('image.upload') }}",
    imageUploadParams: {
      froala: 'true', 
      _token: "{{ csrf_token() }}",
    },
    attribution:false,
    imageUploadMethod: 'POST',
    fontSize:['8', '9', '10', '11', '12',  '14', '16', '18', '20', '22', '24', '30', '36', '48', '60', '72', '96'],

  })
</script>
@endpush
