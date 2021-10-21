<div class="container">
<section class="row">
    <section class="col-md-3" >
      
      <section class="modal fade" id="modalDelete">
        <section class="modal-dialog"  >
          <section class="modal-content" >
            <section class="modal-header">
              <h4 class="modal-title">Xóa</h4>
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </section>
            <section class="modal-body">
              Bạn có chắc muốn xóa không?
            </section>
            <section class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              
              <a href="deleteEmployee.php?id=<?php echo $row['emp_id']; ?>"><button type="button" class="btn btn-success">OK</button></a>
            </section>
          </section>
        </section>
      </section>
    </section>
  </section>
  </div>