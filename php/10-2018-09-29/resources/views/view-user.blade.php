{{$nguoi_dung->name}} {{$nguoi_dung->email}}

<form action="http://localhost/aptech-php-14-namnh/php/10-2018-09-29/public/xoaNguoiDung/{{$nguoi_dung->id}}" method="POST">
  {{csrf_field()}}
  <button>xoa</button>
</form>