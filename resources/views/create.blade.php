extends
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <form action="create" method="POST">
    @csrf
    <label for="title">Label</label><br>
    <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
    <input type="text" name="title" ><br>
    <label for="body">Label</label><br>
    <input type="text" name="body" ><br>
    <textarea name="description" cols="30" rows="10"></textarea><br>
      <button>Send</button>
    </form>

   