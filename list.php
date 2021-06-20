<?php defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Notes App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/font-awesome.min.css'?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

</head>
<body>

<div class="text-center">
  <h1>Notes Apps</h1>
</div>
  
<div class="container">
  <h2>LIST : </h2>
  <div class="pull-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> New </a></div>
  <br>
  <br>
  <table class="table table-bordered table-sm" >
    <thead>
      <tr>
        <th>Date</th>
        <th>Time</th>
        <th>Title</th>
        <th>Text</th>
        <th class="text-center">Options</th>

      </tr>
    </thead>
    <tbody id="show_data">
      
    </tbody>
  </table>

</div>


  <!-- MODAL ADD -->
            <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                          <div class="form-group row">
                            <label class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-10">
                              <input type="date" name="note_date" id="note_date" class="form-control" placeholder="Title date ...">
                            </div>
                        </div>

                         <div class="form-group row">
                            <label class="col-md-2 col-form-label">Time</label>
                            <div class="col-md-10">
                              <input type="time" name="note_time" id="note_time" class="form-control" placeholder="Title time ...">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Title</label>
                            <div class="col-md-10">
                              <input type="text" name="note_title" id="note_title" class="form-control" placeholder="Title Note ...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Note</label>
                            <div class="col-md-10">
                              <textarea  name="note_text" id="note_text" class="form-control" placeholder="This is my note ..."></textarea>
                            </div>
                        </div>
                 
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="new_note" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->


        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <input type="hidden" name="nID_edit" id="nID_edit" class="form-control" placeholder="nID">

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-10">
                              <input type="date" name="note_date_edit" id="note_date_edit" class="form-control" placeholder="Note Date">
                            </div>
                        </div>

                         <div class="form-group row">
                            <label class="col-md-2 col-form-label">Time</label>
                            <div class="col-md-10">
                              <input type="time" name="note_time_edit" id="note_time_edit" class="form-control" placeholder="Note Time">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Title</label>
                            <div class="col-md-10">
                              <input type="text" name="note_title_edit" id="note_title_edit" class="form-control" placeholder="Note Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Note</label>
                            <div class="col-md-10">
                              <textarea name="note_text_edit" id="note_text_edit" class="form-control" placeholder="Note"></textarea>
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-success">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->

           <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this note?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="nID_delete" id="nID_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-danger">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->

<script type="text/javascript">
  $(document).ready(function(){
    show_note();
         
    function show_note(){
        $.ajax({
            type  : 'GET',
            url   : '<?php echo base_url('App/note_data')?>',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                          '<td>'+data[i].date+'</td>'+
                          '<td>'+data[i].time+'</td>'+
                            '<td>'+data[i].title+'</td>'+
                            '<td>'+data[i].text+'</td>'+
                            '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-date="'+data[i].date+'" data-time="'+data[i].time+'" data-id="'+data[i].nID+'" data-title="'+data[i].title+'" data-text="'+data[i].text+'"><i class="fa fa-edit"></i> Edit</a>'+' '+
                                    '<a href="javascript:void(0);" title="Delete Note" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].nID+'"><i class="fa fa-trash"></i> Delete</a>'+
                                '</td>'+
                            '</tr>';
                }
                $('#show_data').html(html);
            }

        }); 
    }

        //Insert New Note
        $('#new_note').on('click',function(){ 
            var note_date = $('#note_date').val();
            var note_title = $('#note_title').val();
            var note_text = $('#note_text').val();
            var note_time = $('#note_time').val();
            $.ajax({
                type : "POST",
                url   : '<?php echo base_url('App/insert')?>',
                dataType : "JSON",
                data : {note_date:note_date,note_time:note_time, note_title:note_title, note_text:note_text},
                success: function(data){
                    $('[name="note_date"]').val("");
                    $('[name="note_title"]').val("");
                    $('[name="note_text"]').val("");
                     $('[name="note_time"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_note();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var id = $(this).data('id');
            var note_date = $(this).data('date');
            var note_title = $(this).data('title');
            var note_text   = $(this).data('text');
             var note_time = $(this).data('time');
            
            $('#Modal_Edit').modal('show');
            $('[name="nID_edit"]').val(id);
            $('[name="note_date_edit"]').val(note_date);
            $('[name="note_title_edit"]').val(note_title);
            $('[name="note_text_edit"]').val(note_text);
             $('[name="note_time_edit"]').val(note_time);
        });

        //update record to database
         $('#btn_update').on('click',function(){
            var nID = $('#nID_edit').val();
            var date = $('#note_date_edit').val();
            var title = $('#note_title_edit').val();
            var text   = $('#note_text_edit').val();
            var time   = $('#note_time_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('App/update')?>",
                dataType : "JSON",
                data : {date:date ,time:time, nID:nID , title:title, text:text},
                success: function(data){
                    $('[name="nID_edit"]').val("");
                    $('[name="note_date_edit"]').val("");
                    $('[name="note_title_edit"]').val("");
                    $('[name="note_text_edit"]').val("");
                    $('[name="note_time_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_note();
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var id = $(this).data('id');
            
            $('#Modal_Delete').modal('show');
            $('[name="nID_delete"]').val(id);
        });

        //delete record to database
         $('#btn_delete').on('click',function(){
            var nID = $('#nID_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('App/delete')?>",
                dataType : "JSON",
                data : {nID:nID},
                success: function(data){
                    $('[name="nID_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_note();
                }
            });
            return false;
        });

  });

</script>

</body>
</html>
