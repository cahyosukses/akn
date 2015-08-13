<title><?= $title ?></title>
<?= $this->load->view('message') ?>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });
$(function() {
    
    get_list_news(1);
    $('#add_news').click(function() {
        $('#datamodal').modal('show');
        $('#datamodal h4.modal-title').html('Tambah Berita');
    });
    
    $('#reload_news').click(function() {
        reset_form();
        get_list_news(1);
    });
});
function get_list_news(p, id) {
    $('#form-pencarian').modal('hide');
    var id = '';
    $.ajax({
        type : 'GET',
        url: '<?= base_url("api/restrictarea/news") ?>/page/'+p+'/id/'+id,
        data: '',
        cache: false,
        dataType: 'json',
        beforeSend: function() {
            show_ajax_indicator();
        },
        success: function(data) {
            if ((p > 1) & (data.data.length === 0)) {
                get_list_alumni(p-1);
                return false;
            };

            $('#pagination_no').html(pagination(data.jumlah, data.limit, data.page, 1));
            $('#page_summary_no').html(page_summary(data.jumlah, data.data.length, data.limit, data.page));

            $('#load_data_table tbody').empty();          
            var str = '';

            $.each(data.data,function(i, v){
                var ppn  = (v.ppn/100)*v.total_asli;
                var highlight = 'odd';
                if ((i % 2) === 1) {
                    highlight = 'even';
                };
                str = '<tr class="'+highlight+'">'+
                        '<td align="center">'+((i+1) + ((data.page - 1) * data.limit))+'</td>'+
                        '<td>'+datetimefmysql(v.tanggal)+'</td>'+
                        '<td>'+v.judul+'</td>'+
                        '<td align="right" class=aksi>'+
                            '<button type="button" class="btn btn-default btn-mini" onclick="delete_alumni(\''+v.id+'\','+data.page+');"><i class="fa fa-trash-o"></i></button>'+
                        '</td>'+
                    '</tr>';
                $('#load_data_table tbody').append(str);
                no = v.id;
            });                
        },
        complete: function() {
            hide_ajax_indicator();
        },
        error: function(e){
            hide_ajax_indicator();
        }
    });
}

function reset_form() {
    $('input, select, textarea').val('');
    $('input[type=checkbox], input[type=radio]').removeAttr('checked');
}

function save_data() {
    if ($('#nama').val() === '') {
        custom_message('Peringatan', 'Nama penerimaan tidak boleh kosong !', '#nama');
        $('#nama').focus(); return false;
    }
    if ($('#jenis').val() === '') {
        custom_message('Peringatan', 'Jenis penerimaan tidak boleh kosong !', '#jenis');
        $('#jenis').focus(); return false;
    }
    if ($('#status').val() === '') {
        custom_message('Peringatan', 'Status penerimaan tidak boleh kosong !', '#status');
        $('#status').focus(); return false;
    }
    var cek_id = $('#id_news').val();
    $.ajax({
        url: '<?= base_url('masterdata/manage_news/save') ?>',
        type: 'POST',
        dataType: 'json',
        data: $('#form_news').serialize(),
        cache: false,
        success: function(data) {
            if (data.status === true) {
                if (cek_id === '') {
                    reset_form();
                    alert_tambah();
                    get_list_news('1','',data.id_news);
                } else {
                    alert_edit();
                    $('#form_add').dialog().remove();
                    get_list_news($('.noblock').html(),'');
                }
            }
        }
    });
}

function edit_news(str) {
    var arr = str.split('#');
    form_news();
    $('#id_news').val(arr[0]);
    $('#nama').val(arr[1]);
    $('#jenis').val(arr[3]);
    $('#status').val(arr[2]);
    $('#dialog_news').dialog({ title: 'Edit Jenis Penerimaan' });
}

function paging(page, tab, search) {
    get_list_news(page, search);
}

function delete_news(id, page) {
    $('<div id=alert>Anda yakin akan menghapus data ini?</div>').dialog({
        title: 'Konfirmasi Penghapusan',
        autoOpen: true,
        modal: true,
        buttons: {
            "OK": function() {
                
                $.ajax({
                    url: '<?= base_url('masterdata/manage_news/delete') ?>?id='+id,
                    cache: false,
                    success: function() {
                        get_list_news(page);
                        $('#alert').dialog().remove();
                    }
                });
            },
            "Cancel": function() {
                $(this).dialog().remove();
            }
        }
    });
}
</script>
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active"><?= $title ?></a></li>
      </ul>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple ">
        <div class="grid-title no-border">
        <h4>Message <span class="semi-bold">boxes</span></h4>
        <div class="tools"> 
            <button id="add_news" class="btn btn-info btn-mini"><i class="fa fa-plus-circle"></i> Tambah</button>
            <!--<button id="cari_button" class="btn btn-mini"><i class="fa fa-search"></i> Cari</button>-->
            <button id="reload_news" class="btn btn-mini"><i class="fa fa-refresh"></i> Reload</button>
        </div>
        </div>
        <div class="grid-body no-border">
        <div class="row-fluid">
            <div id="result">
                <table class="table table-bordered table-stripped table-hover" id="load_data_table">
                    <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th width="15%" class="left">Tanggal</th>
                      <th width="75%" class="left">Judul Berita</th>
                      <th width="5%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <div id="pagination_no" class="pagination"></div>
                <div class="page_summary" id="page_summary_no"></div>
            </div>
        </div>
        </div>
        <div id="datamodal" class="modal fade">
            <div class="modal-dialog" style="width: 800px">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
              <form action="" id="search_renbut" role="form">
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Judul:</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Isi Berita:</label>
                    <textarea name="isi" id="isi"></textarea>
                </div>
            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-refresh"></i> Batal</button>
              <button type="button" class="btn btn-primary" id="save" onclick="get_list_renbut(1);"><i class="fa fa-eye"></i> Tampilkan</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        </div>
        </div>
      </div>
      <!-- END PAGE -->
    </div>