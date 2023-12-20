<form class="row g-3" action="{{ $action }}" method="post">
    @csrf
    @method($method)
  <div class="col-auto">
    <!-- <label for="inputPassword2"></label> -->
    <input name="name" type="text" class="form-control" id="inputPassword2" placeholder="Задание" value="{{isset($task) ? $task->name : ' '}}">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Записать задание</button>
  </div>
</form