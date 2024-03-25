<form class="form-inline" action="{{ route('carts.store') }}" method="post">
  @csrf
  <input type="hidden" name="course_id" value="{{ $course->id }}" >
  <button type="submit" class="btn btn-warning"><i class="fa fa-shopping-cart"></i> Add to cart</button>
</form>