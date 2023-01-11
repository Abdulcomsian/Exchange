
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.frontEnd.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container store-listing">
      <div class="row">
        <div class="col-md-12 text-center mt-5 mb-4 store-listing--title">
          Store Listing
        </div>
        <div class="col-md-3 store-listing--content">
          <div id="list-example" class="list-group">
            <a
              class="list-group-item list-group-item-action list-1 active"
              href="#"
              >Store Listing</a
            >
            <a class="list-group-item list-group-item-action list-2" href="#"
              >Logout</a
            >
          </div>
        </div>
        <div class="col-md-8 store-listing--table">
          <div
            data-spy="scroll"
            data-target="#list-example"
            data-offset="0"
            class="scrollspy-example"
          >
            <table class="table table-striped" >
              <thead>
                <tr style="border-top: 1px solid black">
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Creation Date</th>
                  <th scope="col">status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Scambled</td>
                  <td>12-feb-2022</td>
                  <td><span class="bdg bdg--primary">Active</span></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>22-feb-2022</td>
                  <td><span class="bdg bdg--danger">Sold</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('script'); ?>
<script>
    const btnLink1 = document.querySelector(".list-1");
const btnLink2 = document.querySelector(".list-2");

btnLink1.addEventListener("click", function () {
    this.classList.add("active");
    btnLink2.classList.remove("active");
});
btnLink2.addEventListener("click", function () {
    this.classList.add("active");
    btnLink1.classList.remove("active");
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Exchange\resources\views/FrontEnd/storeListing.blade.php ENDPATH**/ ?>