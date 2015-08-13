<title><?= $title ?></title>

<?= $this->load->view('message') ?>
<script type="text/javascript">
$(function() {
    
    $('#tabs').tabs();
    //get_list_jenis_penerimaan(1);
    form_cari_jenis_penerimaan();
    $('#add_jenis_penerimaan').button({
        icons: {
            secondary: 'ui-icon-newwin'
        }
    }).click(function() {
        form_jenis_penerimaan();
    });
    
    $('#reload_jenis_penerimaan').button({
        icons: {
            secondary: 'ui-icon-refresh'
        }
    }).click(function() {
        reset_form();
        get_list_jenis_penerimaan();
    });
    
    $('#cari_button').button({
        icons: {
            secondary: 'ui-icon-search'
        }
    }).click(function() {
        //$('#dialog_cari_jenis_penerimaan').dialog('open');
        $('#datamodal').modal('show');
    });
});
function get_list_jenis_penerimaan(page, id) {
    var page= (page !== undefined)?page:1;
    var id  = (id !== undefined)?id:'';
    $.ajax({
        url: '<?= base_url('masterdata/manage_jenis_penerimaan') ?>/list/'+page,
        data: $('#form_cari_jenis_penerimaan').serialize()+'&id='+id,
        cache: false,
        success: function(data) {
            $('#result').html(data);
        }
    });
}

function form_jenis_penerimaan() {
    var str = '<div id="dialog_jenis_penerimaan"><form action="" id="form_jenis_penerimaan">'+
            '<?= form_hidden('id_jenis_penerimaan', NULL, 'id=id_jenis_penerimaan') ?>'+
            '<table width=100% cellpadding=0 cellspacing=0 class=inputan>'+
                '<tr><td>Nama Penerimaan *:</td><td><?= form_input('nama', NULL, 'id=nama') ?></td></tr>'+
                '<tr><td>Jenis Penerimaan *:</td><td><select name="jenis" id="jenis"><option value="">Pilih ...</option><option value="Mahasiswa">Mahasiswa</option><option value="Non Mahasiswa">Non Mahasiswa</option></select></td></tr>'+
                '<tr><td>Status *:</td><td><select name="status" id="status"><option value="">Pilih ...</option><option value="SPP">SPP</option><option value="Non SPP">Non SPP</option></select></td></tr>'+
                //'<tr><td width=30%>Nama Unit Satker:</td><td><?= form_input('nama', NULL, 'id=nama size=40 onKeyup="javascript:this.value=this.value.toUpperCase();"') ?></td></tr>'+
            '</table>'+
            '</form></div>';
    $(str).dialog({
        title: 'Tambah Jenis Penerimaan',
        autoOpen: true,
        width: 480,
        height: 180,
        modal: true,
        hide: 'clip',
        show: 'blind',
        buttons: {
            "Simpan": function() {
                save_data();
            }, "Cancel": function() {
                $(this).dialog().remove();
            }
        }, close: function() {
            $(this).dialog().remove();
        }
    });
}

function form_cari_jenis_penerimaan() {
    var str = '<div id="dialog_cari_jenis_penerimaan"><form action="" id="form_cari_jenis_penerimaan">'+
            '<table width=100% cellpadding=0 cellspacing=0 class=inputan>'+
                '<tr><td>Nama Penerimaan :</td><td><?= form_input('nama', NULL, '') ?></td></tr>'+
                '<tr><td>Jenis Penerimaan :</td><td><select name="jenis"><option value="">Pilih ...</option><option value="Mahasiswa">Mahasiswa</option><option value="Non Mahasiswa">Non Mahasiswa</option></select></td></tr>'+
                '<tr><td>Status :</td><td><select name="status"><option value="">Pilih ...</option><option value="SPP">SPP</option><option value="Non SPP">Non SPP</option></select></td></tr>'+
                //'<tr><td width=30%>Nama Unit Satker:</td><td><?= form_input('nama', NULL, 'id=nama size=40 onKeyup="javascript:this.value=this.value.toUpperCase();"') ?></td></tr>'+
            '</table>'+
            '</form></div>';
    $(str).dialog({
        title: 'Cari Jenis Penerimaan',
        autoOpen: false,
        width: 480,
        height: 180,
        modal: true,
        hide: 'clip',
        show: 'blind',
        buttons: {
            "Cari": function() {
                get_list_jenis_penerimaan(1);
                $(this).dialog('close');
            }, "Cancel": function() {
                $(this).dialog('close');
            }
        }, close: function() {
            $(this).dialog('close');
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
    var cek_id = $('#id_jenis_penerimaan').val();
    $.ajax({
        url: '<?= base_url('masterdata/manage_jenis_penerimaan/save') ?>',
        type: 'POST',
        dataType: 'json',
        data: $('#form_jenis_penerimaan').serialize(),
        cache: false,
        success: function(data) {
            if (data.status === true) {
                if (cek_id === '') {
                    reset_form();
                    alert_tambah();
                    get_list_jenis_penerimaan('1','',data.id_jenis_penerimaan);
                } else {
                    alert_edit();
                    $('#form_add').dialog().remove();
                    get_list_jenis_penerimaan($('.noblock').html(),'');
                }
            }
        }
    });
}

function edit_jenis_penerimaan(str) {
    var arr = str.split('#');
    form_jenis_penerimaan();
    $('#id_jenis_penerimaan').val(arr[0]);
    $('#nama').val(arr[1]);
    $('#jenis').val(arr[3]);
    $('#status').val(arr[2]);
    $('#dialog_jenis_penerimaan').dialog({ title: 'Edit Jenis Penerimaan' });
}

function paging(page, tab, search) {
    get_list_jenis_penerimaan(page, search);
}

function delete_jenis_penerimaan(id, page) {
    $('<div id=alert>Anda yakin akan menghapus data ini?</div>').dialog({
        title: 'Konfirmasi Penghapusan',
        autoOpen: true,
        modal: true,
        buttons: {
            "OK": function() {
                
                $.ajax({
                    url: '<?= base_url('masterdata/manage_jenis_penerimaan/delete') ?>?id='+id,
                    cache: false,
                    success: function() {
                        get_list_jenis_penerimaan(page);
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
            <button id="add_jenis_penerimaan" class="btn btn-mini"><i class="fa fa-plus-circle"></i> Tambah Data</button>
            <button id="reload_jenis_penerimaan" class="btn btn-mini"><i class="fa fa-refresh"></i> Reload Data</button>
            <button id="cari_button" class="btn btn-mini"><i class="fa fa-search"></i> Cari</button>
        </div>
        </div>
        <div class="grid-body no-border">
        <div class="row-fluid">
            <div id="result">

            </div>
        </div>
        </div>
        <div id="datamodal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
              <form action="" id="search_renbut" role="form" class="form-horizontal">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-addon" id="basic-addon2">@example.com</span>
                </div>

                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-addon">.00</span>
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