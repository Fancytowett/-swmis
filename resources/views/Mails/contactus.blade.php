<form action="{{route('send.contactus')}}" method="post" class="form-dark">
    {{csrf_field()}}
    <div class="form-group">
        <label for="Name"> Name:</label>
        <input type="text" name="name" class="form-control" placeholder="enter your username">
    </div>

    <div class="form-group">
        <label for="Email">Email:</label>
        <input type="email" name="email" class="form-control" placeholder="enter your email">
    </div>
    <div class="form-group">
        <label for="Message">Message</label>
        <textarea class="form-control" name="message"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="submit" name="submit" class="btn btn-info">
    </div>
</form>