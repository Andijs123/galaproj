
    <form action="create" method="POST">
    @csrf
    <label for="title">Label</label><br>
    <input type="text" name="title" ><br>
    <label for="body">Label</label><br>
    <input type="text" name="body" ><br>
    <textarea name="description" cols="30" rows="10"></textarea><br>
    <button>Send</button>
    </form>
