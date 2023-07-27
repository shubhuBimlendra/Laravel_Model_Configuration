<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<h1>Add Address</h1>
<form method="post" action="{{route('address.store')}}">
    @csrf
    <div style="justify-content:center; align-item:center; width:40%; ">
        <div class="form-group">
            <label>Students : </label>
            <select name="studentname" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                @foreach($students as $student)
                <option value="{{$student->id}}">{{$student->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Country</label>
            <input type="text" name="country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Country Name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
