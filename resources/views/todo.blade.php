<div class="text-center mt-5">
    <h2>Add Todo</h2>

    <form class="row g-3 justify-content-center" method="post" action="{{route('todos.store)}}">
        @csrf
        <div class="col-6">
            <input type="text" class="form-control" name="title" placeholder="title">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>


    </form>
</div>