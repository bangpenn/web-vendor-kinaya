<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('frontend/assets/logo kinaya.png') }}" type="image/x-icon" />

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

	<title>AdminKinaya</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i><br>
            {{-- <span class="text">Hello, {{ $user->name }}</span> --}}
            <span class="text">Hello, Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="{{ route('admin.dashboard') }}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			{{-- <li>
				<a href="{{ route('admin.vendor_po') }}">
					<i class='bx bxs-group' ></i>
					<span class="text">My Vendor</span>
				</a>
			</li> --}}
			<!-- <li>
				<a href="{{ route('admin.dashboard') }}">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li> -->
			<!-- <li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li> -->
			<!-- <li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li> -->
		</ul>
		<ul class="side-menu">
			<li>
				<a href="{{ route('admin.dashboard') }}">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('admin.dashboard') }}" class="logout">
                        <i class='bx bx-power-off '></i>
                        <span class="text">Logout</span>
                    </a>
                </form>

			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="{{ route('admin.search') }}" method="GET">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="{{ asset('admin/img/people.png') }}">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>

			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>{{ $totalVendors }}</h3>
						<p>New Vendor</p>
					</span>
				</li>
				<!-- <li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3 id="count">1834</h3>
						<p>Visitors</p>
					</span>
				</li> -->
				<!-- <li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Total Sales</p>
					</span>
				</li> -->
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Vendor</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
                                <th>No.</th>
								<th>Nama PIC</th>
                                <th>Nama Perusahaan</th>
								<th>Kategori Vendor</th>
								{{-- <th>Status</th> --}}

                                <th>Kota</th>
                                <th>Provinsi</th>
                                <th>Action</th>
							</tr>
						</thead>
                        <tbody>
                            @foreach($usersWithPerusahaanDetails as $item)
                                <tr>
                                    <td scope="row">{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->perusahaan_detail->nama_perusahaan }}</td>
                                    <td>{{ $item->perusahaan_detail->kategori_bidang_perusahaan }}</td>

                                    <td>{{ $item->perusahaan_detail->kota }}</td>
                                    <td>{{ $item->perusahaan_detail->provinsi }}</td>
                                    <td style="text-align: center">
                                        <a href="{{ url('/admin/vendor_profile/'.$item->id) }}">
                                            <i class='bx bx-show'></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
					</table>

				</div>
				<!-- <div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div> -->
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="{{ asset('admin/js/script.js') }}"></script>
</body>
</html>