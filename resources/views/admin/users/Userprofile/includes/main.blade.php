<div class="page-content">
    <div>
<div class="profile-page">
<div class="wrapper">
  <div class="page-header page-header-small" filter-color="green">
    <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg')"></div>
    <div class="container">
      <div class="content-center">
        <div class="cc-profile-image"><a href=""><img src="{{URL::asset('profilepaner/images/anthony.jpg')}}" alt="Image"/></a></div>
        <div class="h2 title">{{$user->name}}</div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="section" id="about">
<div class="container">
  <div class="card" data-aos="fade-up" data-aos-offset="10">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="card-body">
          <div class="h4 mt-0 title">Basic Information</div>
          <div class="row">
          </div>
          <div class="row mt-3">
            <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
            <div class="col-sm-8">{{$user->email}}</div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-4"><strong class="text-uppercase">userid:</strong></div>
            <div class="col-sm-8">{{$user->id}}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
