<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Are you sure?</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="Backend\post_delete.php">
                    <input type="hidden" class="prodid" id="post_id_d" name="post_id_d">
                    <div class="text-center">
                        <p>DELETE THIS POST</p>
                        <h2 class="name"></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i>
                    Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Edit Post</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="Backend\post_edit.php">
                    <input type="hidden" class="prodid" id="post_id_e" name="post_id_e">
                    <div class="form-group">
                        <label for="exampleInputTitle">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">Places</label>
                        <input type="text" class="form-control" name="places" id="places" placeholder="places">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">Number of guests</label>
                        <input type="number" class="form-control" name="num_guest" id="num_guest" placeholder="Number of guests">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">Money(taka) per person</label>
                        <input type="number" class="form-control" name="cost" id="cost" placeholder="Money(taka) per person">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">Tour Date</label>
                        <input type="date" class="form-control" name="date" id="date">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Details</label>
                        <textarea class="form-control" name="details" id="details" rows="7" cols="80"></textarea>

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i>
                    Update</button>
                </form>
            </div>
        </div>
    </div>
</div>