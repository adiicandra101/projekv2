@extends('layouts.rentcar')
@section('title','Upload Post')

@section('content')

<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Unggah postingan</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Home</a></li>
        <li>Unggah postingan</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header-->


<section>
<div class="uploadcontainer">
  <form id="contact" action="{{route('car_details.store')}}" method="POST" enctype=multipart/form-data>
     @csrf
    <h2><a>Tambah mobil</a></h2>
    <h4><a>tujuan detail</a></h4>
    <fieldset>
      <input placeholder="nama mobil" type="text" name="nama mobil"  required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="harga perhari" type="number" name="harga"  required autofocus>
    </fieldset>

    <fieldset>
      <input placeholder="model mobil" type="number" name="model mobil"  required autofocus>
    </fieldset>

    <fieldset>
    <input placeholder="kapasitas mobil" type="number" name="kapasitas mobil"  required autofocus>
    </fieldset>

    <fieldset>
      <input placeholder="alamat" name="alamat" type="text"  required>
    </fieldset>
    <fieldset>
      <input placeholder="no hp" value="{{ Auth::user()->number }}" name="nomor orang" type="tel" required>
    </fieldset>
    <fieldset>
   <input id="carpic" type="file" name="foto mobil"  required autofocus>
    </fieldset>
  <input style="display:none"  value='{{ Auth::user()->id }}' name="user_id"/>
    <fieldset>

  <select name="posttype" id="posttype">
  <option value="" disabled selected>pilih mobil</option>
    <option value="With Driver">pakai supir</option>
    <option value="Without Driver">tidak pakai supir</option>
  </select>
    </fieldset>

    <fieldset>
    <select name="location" id="Location" required>
    <option value="" disabled selected>Pilih tempat</option>
    <option value="Islamabad">Bojong suren</option>
    <option value="" disabled>Sekeandur</option>
    <option value="Ahmed Nager Chatha">leuwi melang</option>
    <option value="Ahmadpur East">Bojong sereuh</option>
    <option value="Ali Khan Abad">palasari</option>

  </select>

    </fieldset>
    <fieldset>
    <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">Upload </button>
            </div>
    </fieldset>

  </form>
</div>

</section>


@endsection
