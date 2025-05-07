@extends('Layout')

@section('title', 'About')

@section('content')
<style>

</style>
<div class="container--fluid">
	<div class="position-relative">
		<img src="{{asset('images/main.jpg')}}" alt="" class=" object-fit-cover d-none d-lg-block img-fluid " style="width: 100%; height: 70vh; filter: brightness(50%)">
		<div class="container position-absolute top-50 start-50 translate-middle text-white text-center">
			<h2 class="display-4 fw-bold">Selamat Datang di Kelor Lor</h2>
			<p class="mt-2">Kemadang, Kec. Tanjungsari, Kabupaten Gunungkidul, DIY</p>
		</div>
	</div>

	<div class="container mt-5 align-content-center" style="height: 80vh;">
		<div class="row align-items-center">
			<div class="d-none d-md-block col-md-6">
				<div class="container-image  mx-auto">
					<img src="{{asset('images/dokumentasi1.jpg')}}" alt="" class="images object-fit-cover d-block img-fluid ">
				</div>
			</div>
			<div class="col-12 col-md-6">
				<p class="mb-0" style="opacity: 60%;">Kelor Lor</p>
				<h2 class="display-4 fw-bold">Sejarah</h2>
				<div class="divider"></div>
				<p class="mt-2 fs-6">Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus </p>
				<p class="mt-2 fs-6">Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus </p>
			</div>
		</div>
	</div>

	<div class="container text-center mb-5 position-relative  align-content-center" style="width: 100%; height: 60vh;">
		<h2 class="display-6 fw-semibold mb-3">Kondisi Desa</h2>
		<div class="divider mx-auto"></div>
		<p class="mt-3 fs-6">Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. </p>
	</div>
	<div id="galleryCarousel" class="carousel slide mb-5" data-bs-ride="carousel" style="height: 50vh; overflow: hidden;">
        <h2 class="display-6 fw-semibold mb-3 text-center">Galeri</h2>
        <div class="carousel-inner" style="height: 100%;">
            @for($i = 1; $i <= 10; $i++)
            <div class="carousel-item {{ $i === 1 ? 'active' : '' }}">
            <img src="{{ asset('images/image' . $i . '.jpg') }}" class="d-block w-100" style="height: 50vh; object-fit: cover; filter: brightness(50%)" alt="Image {{ $i }}">
            </div>
            @endfor
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
		
    </div>
	<div class="container text-center mb-5 position-relative  align-content-center" style="width: 100%; height: 60vh;">
		<div class="">
			<i class="fa-solid fa-star"></i>
			<i class="fa-solid fa-star fs-3"></i>
			<i class="fa-solid fa-star fs-1"></i>
			<i class="fa-solid fa-star fs-3"></i>
			<i class="fa-solid fa-star"></i>
		</div>
		<h2 class="display-6 fw-semibold mb-3">Norem ipsum dolor sit amet</h2>
		<p class="mt-3 fs-6">Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. </p>
	</div>
	<div class="w-100">
	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7900.2249009488805!2d110.56933744498862!3d-8.090013645660816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bb0f40539bcb1%3A0x315a8f71c2ad9602!2sKelor%20Lor%2C%20Kemadang%2C%20Kec.%20Tanjungsari%2C%20Kabupaten%20Gunungkidul%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1746644716729!5m2!1sid!2sid" class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</div>

@endsection