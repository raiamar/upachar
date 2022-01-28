<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">{{__('Bredcrum Information')}}</h3>
    </div>

    <!--Horizontal Form-->
    <!--===================================================-->
    <form class="form-horizontal" action="{{ route('bredcrum.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3" for="page">{{__('Page')}}</label>
                <div class="col-sm-9">
                    <select class="form-control" name="page">
                        @include('frontend.inc.option')
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-3">
                    <label class="control-label">{{__('Banner Images')}}</label>
                    <strong>(850px*420px)</strong>
                </div>
                <div class="col-sm-9">
                    <div id="photo">

                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer text-right">
            <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
        </div>
    </form>
    <!--===================================================-->
    <!--End Horizontal Form-->

</div>

<script type="text/javascript">

    $(document).ready(function(){

        $('.demo-select2').select2();

        $("#photo").spartanMultiImagePicker({
            fieldName:        'photo',
            maxCount:         1,
            rowHeight:        '200px',
            groupClassName:   'col-md-4 col-sm-9 col-xs-6',
            maxFileSize:      '',
            dropFileLabel : "Drop Here",
            onExtensionErr : function(index, file){
                console.log(index, file,  'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr : function(index, file){
                console.log(index, file,  'file size too big');
                alert('File size too big');
            }
        });
    });

</script>
