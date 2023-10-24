@include('include.entete')

<div class="container">
        <form class="ms-auto me-auto mt-auto" style="width: 500px;">
            <div class="mb-3">
                <label  class="form-label">Full name</label>
                <input type="email" class="form-control" name="name">
                <div id="emailHelp" class="form-text">Email address</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>

           
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
</div>