<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Panel Song Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="next-head-count" content="2">
    <link rel="preload" href="css/AdminFE.css" as="style">
    <link rel="stylesheet" href="css/AdminFE.css" data-n-g="">
    <style id="_goober"> @keyframes go2264125279{from{transform:scale(0) rotate(45deg);opacity:0;}to{transform:scale(1) rotate(45deg);opacity:1;}}@keyframes go3020080000{from{transform:scale(0);opacity:0;}to{transform:scale(1);opacity:1;}}@keyframes go463499852{from{transform:scale(0) rotate(90deg);opacity:0;}to{transform:scale(1) rotate(90deg);opacity:1;}}@keyframes go1268368563{from{transform:rotate(0deg);}to{transform:rotate(360deg);}}@keyframes go1310225428{from{transform:scale(0) rotate(45deg);opacity:0;}to{transform:scale(1) rotate(45deg);opacity:1;}}@keyframes go651618207{0%{height:0;width:0;opacity:0;}40%{height:0;width:6px;opacity:1;}100%{opacity:1;height:10px;}}@keyframes go901347462{from{transform:scale(0.6);opacity:0.4;}to{transform:scale(1);opacity:1;}}.go4109123758{z-index:9999;}.go4109123758 > *{pointer-events:auto;}</style>
    <style type="text/css"></style>
  </head>
	<body data-new-gr-c-s-check-loaded="14.1088.0" data-gr-ext-installed="">
		<div id="__next" data-reactroot="">
			<div style="position: fixed; z-index: 9999; inset: 16px; pointer-events: none;">
				
			</div>
			<div class="h-screen overflow-hidden flex">
				<div class="bg-gray-900">
					<div class="-translate-x-full ease-in fixed z-30 inset-y-0 left-0 w-60 sm:w-80 transition duration-300 transform overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
						<button type="button" class=" lg:hidden fixed top-5 right-5 px-5 py-3 rounded-xl text-sm font-medium text-gray-100 bg-indigo-600 hover:bg-indigo-800 active:bg-grey-900 focus:outline-none border-4 border-gray-500 focus:border-purple-200 transition-all">x</button>
						<div class="flex items-center justify-center mt-8">
							<div class="flex items-center">
								<span class="text-gray-100 test-sm font-semibold lg:text-2xl">Tune Source Admin Panel</span>
							</div>
						</div>
						<nav class="flex flex-col mt-10 px-4 text-center">
							<a class="text-gray-100 bg-gray-700  py-2 text-sm rounded" href="/admin-index">Dashboard</a>
							<a class="text-gray-100 bg-gray-700  mt-3 py-2 text-sm hover:text-gray-700 hover:bg-gray-200 rounded" href="/song-management">Songs</a>
							<a class="text-gray-100 bg-gray-700  mt-3 py-2 text-sm hover:text-gray-700 hover:bg-gray-200 rounded" href="/user-management">Users</a>
							<a class="text-gray-100 bg-gray-700  mt-3 py-2 text-sm hover:text-gray-700 hover:bg-gray-200 rounded" href="/order-management">Orders</a>
							<button type="button" class="bg-gray-900 border-gray-600 border-2 text-gray-100 mt-3 py-2 text-sm hover:text-gray-700 hover:bg-gray-200 rounded"><a href="/admin">Logout</a></button>
						</nav>
						<small class="flex flex-col mt-3 text-center text-gray-500">Logged as: admin</small>
					</div>
				</div>
				<div class="flex flex-col flex-1 overflow-hidden">
					<button class="text-gray-500 dark:text-gray-300 focus:outline-none lg:hidden" type="button">
						<svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								
							</path>
						</svg>
					</button>
				<main class="flex-1 overflow-x-hidden overflow-y-auto" id="main">
					<div class="container mx-auto px-6 py-6">
						<div class="flex flex-col bg-white">
							<section class="container font-mono w-full">
								<div class="m-2 overflow-hidden rounded-lg shadow-lg bg-white">
									<div class="mt-10 sm:mt-0">
										<div class="mt-5 md:mt-0 md:col-span-3">
											<form action="{{route('song.store')}}" method="post" enctype="multipart/form-data">
												@csrf
												<div class="shadow overflow-hidden sm:rounded-md">
													
												</div>
												<div class="px-4 py-5 sm:p-6 bg-white">
													<div class="grid grid-cols-12 gap-6">
														<div class="col-span-12">
															<h1 class="text-2xl">Add New Song</h1>
														</div>
														<div class="col-span-12">
															<div>
																<label for="name" class="block text-sm font-medium text-gray-700">Name<span class="text-red-700 font-bold ml-2">*</span>
																</label>
																<div class="mt-2">
																	<div class="flex flex-wrap items-stretch w-full relative mt-1">
																		<input type="text" class="flex-shrink flex-grow flex-auto focus:ring-indigo-500 flex-1 focus:border-indigo-500 block w-px shadow-sm sm:text-sm border-gray-300 rounded-md  " name="name">
																	</div>
																</div>
															</div>
														</div>
														<div class="col-span-12">
															<div>
																<label for="pageUrl" class="block text-sm font-medium text-gray-700">Price<span class="text-red-700 font-bold ml-2">*</span>
																</label>
																<div class="mt-2">
																	<div class="flex flex-wrap items-stretch w-full relative mt-1">														
																		<input type="text" class="flex-shrink flex-grow flex-auto focus:ring-indigo-500 flex-1 focus:border-indigo-500 block w-px shadow-sm sm:text-sm border-gray-300 rounded-md rounded-l-none " name="price" >
																	</div>
																</div>
															</div>
														</div>
														<div class="col-span-6">
															<div>
																<label for="startAt" class="block text-sm font-medium text-gray-700">Release date<span class="text-red-700 font-bold ml-2">*</span></label>
																<div class="mt-2">
																	<div class="react-datepicker-wrapper">
																		<div class="react-datepicker__input-container">
																			<input type="text" placeholder="Select release date" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm bg-white focus:ring-indigo-500 focus:border-indigo-500" name="release" value="">
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-span-12">
															<div>
																<label for="genres" class="block text-sm font-medium text-gray-700">Genres<span class="text-red-700 font-bold ml-2">*</span></label>
																<div class="mt-2">
																	<div class="flex flex-wrap items-stretch w-full relative mt-1">
																		<input type="text" class="flex-shrink flex-grow flex-auto focus:ring-indigo-500 flex-1 focus:border-indigo-500 block w-px shadow-sm sm:text-sm border-gray-300 rounded-md  " name="genres">
																	</div>
																</div>
															</div>
														</div>
														<div class="col-span-12">
															<div>
																<label for="instrument" class="block text-sm font-medium text-gray-700">Instrument<span class="text-red-700 font-bold ml-2">*</span></label>
																<div class="mt-2">
																	<div class="flex flex-wrap items-stretch w-full relative mt-1"><input type="text" class="flex-shrink flex-grow flex-auto focus:ring-indigo-500 flex-1 focus:border-indigo-500 block w-px shadow-sm sm:text-sm border-gray-300 rounded-md  " name="instrument">
																	</div>
																</div>
															</div>
														</div>
														<div class="col-span-12">
															<div>
																<label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail<span class="text-red-700 font-bold ml-2">*</span></label>
																<div class="mt-2"><div class="flex flex-wrap items-stretch w-full relative mt-1">
																	<input type="file" class="flex-shrink flex-grow flex-auto focus:ring-indigo-500 flex-1 focus:border-indigo-500 block w-px shadow-sm sm:text-sm border-gray-300 rounded-md  " name="thumbnail">
																</div>
															</div>
														</div>
													</div>
													<div class="col-span-12">
														<div>
															<label for="song_url" class="block text-sm font-medium text-gray-700">Song URL<span class="text-red-700 font-bold ml-2">*</span>
															</label>
															<div class="mt-2">
																<div class="flex flex-wrap items-stretch w-full relative mt-1">
																	<input type="text" class="flex-shrink flex-grow flex-auto focus:ring-indigo-500 flex-1 focus:border-indigo-500 block w-px shadow-sm sm:text-sm border-gray-300 rounded-md  " name="song_url">
																</div>
															</div>
														</div>
													</div>
												<div class="px-4 py-3 text-right sm:px-6">
													<button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 bg-indigo-600 focus:ring-indigo-500 hover:bg-indigo-700">Save</button></div>
												</form>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</main>
				</div>
			</div>
		</div>
	</body>
</html>