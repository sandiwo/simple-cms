<div class="col-md-8">
    <div class="x_panel">
        <div class="x_title">
            <h2>Tambah Post</h2>
            <div class="clearfix"></div>
            <div class="x_content">
            </div>
            @include('admin.post.form')
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="x_panel">
        <div class="x_title">
            <h2>Data Post</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="form-group">
                {!! Form::label('tanggal_posting', 'Tanggal Posting') !!}
                {!! Form::text('tanggal_posting', isset($post->tanggal_posting) ? $post->tanggal_posting : '', ['class' => 'form-control tanggal']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('status', 'Status') !!}
                {!! Form::select('status', ['draft' => 'Draft', 'publish' => 'Publish'], isset($post->status) ? $post->status : '', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success"><i class="fa fa-check"> </i> Simpan</button>
                <a href="{{ route('post') }}" class="btn btn-default"><i class="fa fa-reply"></i> Kembali</a>
            </div>
        </div>
    </div>
    <div class="x_panel">
        <div class="x_title">
            <h2>Jenis Post</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="form-group">
                @if(!empty($post))
                    @include('admin.post.formJenisEdit')
                @else
                    @include('admin.post.formJenis')
                @endif
            </div>
        </div>
    </div>
    <div class="x_panel">
        <div class="x_title">
            <h2>Format Post</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="form-group">
                {!! Form::hidden('format', 'standart') !!}
                <div class="btn-group-vertical btn-block">
                    <a href="#" onclick="confirm('Jika mengganti format maka data yang di masukkan akan hilang.', '?format=standart')" class="btn btn-primary active"><i class="fa fa-thumb-tack"></i> Standard</a>
                    <a href="#" onclick="confirm('Jika mengganti format maka data yang di masukkan akan hilang.', '?format=page')" class="btn btn-primary"><i class="fa fa-pencil"></i> Page</a>
                    <a href="#" onclick="confirm('Jika mengganti format maka data yang di masukkan akan hilang.', '?format=image')" class="btn btn-primary"><i class="fa fa-photo"></i> Image</a>
                </div>
            </div>
        </div>
    </div>
    <div class="x_panel">
        <div class="x_title">
            <h2>Kategori</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="form-group">
                <div class="btn-group-vertical btn-block" data-toggle="buttons">
                    @forelse(treeData($treeKategori) as $kategori)
                        {!! str_repeat('&nbsp;&nbsp;&nbsp;', $kategori->level) . Form::checkbox('id_kategori['.$kategori->id.']', $kategori->id) . ' '. $kategori->kategori !!}<br>
                    @empty
                        <p>Tidak ada kategori untuk ditampilkan.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <div class="x_panel">
        <div class="x_title">
            <h2>Tag</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="form-group">
                <div class="btn-group-vertical btn-block" data-toggle="buttons">
                    {!! Form::select('id_tag[]', $tag, isset($post->id_tag) ? $post->id_tag : '', ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="x_panel">
        <div class="x_title">
            <h2>Gambar Post</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="form-group">
                {!! Form::hidden('gambar', null, ['id' => 'gambar']) !!}
                <img src="{{ isset($post->gambar) ? $post->gambar : asset('images/no_image.jpg') }}" id="img-preview" class="img-responsive">
                <div class="text-center" style="margin-top:20px;">
                    <button type="button" class="btn btn-default btn-sm text-center" onclick="browse_main_image()"><i class="fa fa-folder-open"></i> Browse</button>
                    <button type="button" class="btn btn-danger btn-sm text-center" onclick="clear_main_image()"><i class="fa fa-times"></i> Clear</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="filemanager" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">File Manager</h4>
            </div>
            <div class="modal-body"  style="padding: 0px;">
                <iframe name="filemanager" multiple width="100%" height="500" style="border: 0px;" src="{{ asset('vendors/responsive_filemanager/filemanager/dialog.php?type=0&field_id=gambar') }}"></iframe>
            </div>
        </div>
    </div>
</div>
