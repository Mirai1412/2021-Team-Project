<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
        <body>
            <div class="max-w-screen-xl mx-auto">
                <!-- header -->
                <header
                    class="flex items-center justify-between py-2 border-b"
                    style="margin-top:10px">
                    <a href="" class="px-2 lg:px-0 uppercase font-bold text-purple-800">
                        Login
                    </a>
                    <ul class="inline-flex items-center">
                        <li class="px-2 md:px-4">
                            <a href="" class="text-purple-600 font-semibold hover:text-purple-500">
                                프로필
                            </a>
                        </li>
                        <li class="px-2 md:px-4">
                            <a href="채팅.html" class="text-gray-500 font-semibold hover:text-purple-500">
                                채팅
                            </a>
                        </li>
                        <li class="px-2 md:px-4">
                            <a href="" class="text-gray-500 font-semibold hover:text-purple-500">
                                뉴스
                            </a>
                        </li>
                        <li class="px-2 md:px-4">
                            <a href="달력.html" class="text-gray-500 font-semibold hover:text-purple-500">
                                달력
                            </a>
                        </li>
                        <li class="px-2 md:px-4 hidden md:block">
                            <a href="" class="text-gray-500 font-semibold hover:text-purple-500">
                                새소식
                            </a>
                        </li>
                        <li class="px-2 md:px-4 hidden md:block">
                            <a
                                href="https://github.com/Mirai1412"
                                class="text-gray-500 font-semibold hover:text-purple-500">
                                git
                            </a>
                        </li>
                    </ul>

                </header>
                <!-- header ends here -->

                <main class="mt-10">
                    <div class="block md:flex md:space-x-2 px-2 lg:p-0">

                        <div class='flex items-center w-full'>

                            <div class='w-full' style="height: 1350px">

                                <div class="flex flex-row mt-2 px-2 py-3 mx-3"
                                style="margin: 0">
                                    <div class="w-auto h-auto rounded-full border-2 border-pink-500">
                                        <img
                                            class='w-12 h-12 object-cover rounded-full shadow cursor-pointer'
                                            alt='User avatar'
                                            src='{{ $post->user->profileImagePath() }}'>
                                    </div>
                                    <div class="flex flex-col mb-2 ml-4 mt-1">
                                        <div class='text-gray-600 text-sm font-semibold'>{{ $post->user->name }}</div>
                                        <div class='flex w-full mt-1'>
                                            <div class='text-blue-700 font-base text-xs mr-1 cursor-pointer'>
                                                UX Design
                                            </div>
                                            <div class='text-gray-400 font-thin text-xs'>
                                                • 30 seconds ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b border-gray-100"></div>
                                <div class='text-gray-400 font-medium text-sm mb-7 mt-6 mx-3 px-2'><img
                                    class="rounded"
                                    src="https://picsum.photos/536/354"
                                    style="margin: 0 auto;"></div>
                                <div class='text-gray-600 font-semibold text-lg mb-2 mx-3 px-2'>{{ $post->title }}</div>
                                <div class='text-gray-500 font-thin text-sm mb-6 mx-3 px-2'>{!! $post->content !!}</div>
                                <div class="flex justify-start mb-4 border-t border-gray-100">
                                    <div class="flex w-full mt-1 pt-2 pl-5">
                                        <span
                                            class="bg-white transition ease-out duration-300 hover:text-red-500 border w-8 h-8 px-2 pt-2 text-center rounded-full text-gray-400 cursor-pointer mr-2">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                width="14px"
                                                viewbox="0 0 24 24"
                                                stroke="currentColor">
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
                                            </svg>
                                        </span>
                                        <img
                                            class="inline-block object-cover w-8 h-8 text-white border-2 border-white rounded-full shadow-sm cursor-pointer"
                                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt=""/>
                                        <img
                                            class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer"
                                            src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt=""/>
                                        <img
                                            class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
                                            alt=""/>
                                        <img
                                            class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer"
                                            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                                            alt=""/>
                                    </div>
                                    <div class="flex justify-end w-full mt-1 pt-2 pr-5">
                                        <span
                                            class="transition ease-out duration-300 hover:bg-blue-50 bg-blue-100 h-8 px-2 py-2 text-center rounded-full text-blue-400 cursor-pointer mr-2">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                width="14px"
                                                viewbox="0 0 24 24"
                                                stroke="currentColor">
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                            </svg>
                                        </span>
                                        <span
                                            class="transition ease-out duration-300 hover:bg-blue-500 bg-blue-600 h-8 px-2 py-2 text-center rounded-full text-gray-100 cursor-pointer">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                width="14px"
                                                viewbox="0 0 24 24"
                                                stroke="currentColor">
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex w-full border-t border-gray-100">
                                    <div class="mt-3 mx-5 flex flex-row">
                                        <div
                                            class='flex text-gray-700 font-normal text-sm rounded-md mb-2 mr-4 items-center'>Comments:<div class="ml-1 text-gray-400 font-thin text-ms">
                                                30</div>
                                        </div>
                                        <div
                                            class='flex text-gray-700 font-normal text-sm rounded-md mb-2 mr-4 items-center'>Views:
                                            <div class="ml-1 text-gray-400 font-thin text-ms">
                                                60k</div>
                                        </div>
                                    </div>
                                    <div class="mt-3 mx-5 w-full flex justify-end">
                                        <div
                                            class='flex text-gray-700 font-normal text-sm rounded-md mb-2 mr-4 items-center'>Likes:
                                            <div class="ml-1 text-gray-400 font-thin text-ms">
                                                120k</div>
                                        </div>
                                    </div>
                                </div>






                                <!-- 댓글 입력란-->
                                >@if(Auth::check())
                                <div class="relative flex items-center self-center w-full max-w-xl p-4 overflow-hidden text-gray-600 focus-within:text-gray-400">
                                    <img
                                        class='w-10 h-10 object-cover rounded-full shadow mr-2 cursor-pointer'
                                        alt='User avatar'
                                        src='{{ $post->user->profileImagePath() }}' />
                                        <span class="absolute inset-y-0 right-0 flex items-center pr-6">
                                         <button
                                             type="submit"
                                             class="p-1 focus:outline-none focus:shadow-none hover:text-blue-500">
                                             <svg
                                              class="w-6 h-6 transition ease-out duration-300 hover:text-blue-500 text-gray-400"
                                               xmlns="http://www.w3.org/2000/svg"
                                               fill="none"
                                               viewbox="0 0 24 24"
                                              stroke="currentColor">
                                              <path
                                                 stroke-linecap="round"
                                                   stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                              </svg>
                                         </button>
                                        </span>
                                    <form action="{{ route('posts.commentStore') }}" method = "post">
                                    @csrf
                                    <input
                                        type="text"
                                        class="w-full py-2 pl-4 pr-10 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400 focus:bg-white focus:outline-none focus:border-blue-500 focus:text-gray-900 focus:shadow-outline-blue"
                                        placeholder="댓글을 입력하세요."
                                        name="content"
                                        autocomplete="off"
                                        style="border-radius: 25px";>

                                    <input type="submit"
                                        class=" py-2 pl-4 pr-10 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400 focus:bg-white focus:outline-none focus:border-blue-500 focus:text-gray-900 focus:shadow-outline-blue"
                                        style="border-radius: 25px";
                                        value="입력">
                                    </form>
                                </div>

                            @else
                            <div
                                class="relative flex items-center self-center w-full max-w-xl p-4 overflow-hidden text-gray-600 focus-within:text-gray-400">
                                <img class='w-10 h-10 object-cover rounded-full shadow mr-2 cursor-pointer' alt='User avatar' src='/storage/images/profiles/no_profile_image.png'/>
                                <span class="absolute inset-y-0 right-0 flex items-center pr-6">
                                    <button
                                        type="submit"
                                        class="p-1 focus:outline-none focus:shadow-none hover:text-blue-500">
                                        <svg
                                            class="w-6 h-6 transition ease-out duration-300 hover:text-blue-500 text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewbox="0 0 24 24"
                                            stroke="currentColor">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>

                                    </button>
                                </span>
                                <input
                                    type=""
                                    class="w-full py-2 pl-4 pr-10 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400 focus:bg-white focus:outline-none focus:border-blue-500 focus:text-gray-900 focus:shadow-outline-blue"
                                    style="border-radius: 25px";
                                    placeholder="댓글 서비스는 로그인이 필요합니다."
                                    autocomplete="off">

                                <input type="submit"
                                    class="w-full py-2 pl-4 pr-10 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400 focus:bg-white focus:outline-none focus:border-blue-500 focus:text-gray-900 focus:shadow-outline-blue"
                                    style="border-radius: 25px";
                                    value="입력">

                            </div>

                            @endif







                                <!-- 댓글-->
                                @foreach ($posts as $post)
                                <div
                                    class="flex bg-white shadow-lg rounded-lg mx-4 md:mx-auto my-56 max-w-md md:max-w-2xl "
                                    style="margin: 10px; width: 800px;">
                                    <!--horizantil margin is just for display-->
                                    <div class="flex items-start px-4 py-6">
                                        <img
                                            class="w-12 h-12 rounded-full object-cover mr-4 shadow"
                                            src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                            alt="avatar">
                                        <div class="">
                                            <div class="flex items-center justify-between">
                                                <h2 class="text-lg font-semibold text-gray-900 -mt-1">Brad Adams
                                                </h2>
                                                <small class="text-sm text-gray-700">22h ago</small>
                                            </div>
                                            <p class="text-gray-700">Joined 12 SEP 2012.
                                            </p>
                                            <p class="mt-3 text-gray-700 text-sm">
                                                {{ $post->comments->content }}
                                            </p>
                                            <div class="mt-4 flex items-center">
                                                <div class="flex mr-2 text-gray-700 text-sm mr-3">
                                                    <svg fill="none" viewbox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                                    </svg>
                                                    <span>12</span>
                                                </div>
                                                <div class="flex mr-2 text-gray-700 text-sm mr-8">
                                                    <svg fill="none" viewbox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                                                    </svg>
                                                    <span>8</span>
                                                </div>
                                                <div class="flex mr-2 text-gray-700 text-sm mr-4">
                                                    <svg fill="none" viewbox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                                                    </svg>
                                                    <span>share</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                            </div>







                            <div class="bg-white my-12 pb-6 w-full justify-center items-center overflow-hidden md:max-w-sm rounded-lg shadow-sm mx-auto"
                                style="margin: 0 0 0 10px">
                                <div class="relative h-40">
                                    <img
                                        class="absolute h-full w-full object-cover"
                                        src="https://images.unsplash.com/photo-1448932133140-b4045783ed9e?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80">
                                </div>
                                <div
                                    class="relative shadow mx-auto h-24 w-24 -my-12 border-white rounded-full overflow-hidden border-4">
                                    <img
                                        class="object-cover w-full h-full"
                                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=80">
                                </div>
                                <div class="mt-16">
                                    <h1 class="text-lg text-center font-semibold">
                                        Cassie
                                    </h1>
                                    <p class="text-sm text-gray-600 text-center">
                                        13 connections in common
                                    </p>
                                </div>
                                <div class="mt-6 pt-3 flex flex-wrap mx-6 border-t"
                                style="margin-bottom: 50px">
                                    <div
                                        class="text-xs mr-2 my-1 uppercase tracking-wider border px-2 text-indigo-600 border-indigo-600 hover:bg-indigo-600 hover:text-indigo-100 cursor-default">
                                        <a href=""></a>
                                        go post
                                    </div>
                                    <div
                                        class="text-xs mr-2 my-1 uppercase tracking-wider border px-2 text-indigo-600 border-indigo-600 hover:bg-indigo-600 hover:text-indigo-100 cursor-default">
                                        VueJS
                                    </div>
                                    <div
                                        class="text-xs mr-2 my-1 uppercase tracking-wider border px-2 text-indigo-600 border-indigo-600 hover:bg-indigo-600 hover:text-indigo-100 cursor-default">
                                        TailwindCSS
                                    </div>
                                    <div
                                        class="text-xs mr-2 my-1 uppercase tracking-wider border px-2 text-indigo-600 border-indigo-600 hover:bg-indigo-600 hover:text-indigo-100 cursor-default">
                                        React
                                    </div>
                                    <div
                                        class="text-xs mr-2 my-1 uppercase tracking-wider border px-2 text-indigo-600 border-indigo-600 hover:bg-indigo-600 hover:text-indigo-100 cursor-default">
                                        Painting
                                    </div>
                                </div>
                                <div class="w-full lg:w-1/3 px-3"
                                style="width: 300px; margin: 0 auto;">
                                    <!-- topics -->
                                    <div class="mb-4">
                                        <h5 class="font-bold text-lg uppercase text-gray-700 px-1 mb-2">
                                            Recent Writing List
                                        </h5>
                                        <ul>
                                            <li
                                                class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                                                <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                                    <span class="inline-block h-4 w-4 bg-green-300 mr-3"></span>
                                                    HTML&CSS
                                                    <span class="text-gray-500 ml-auto">23 articles</span>
                                                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                                                </a>
                                            </li>
                                            <li
                                                class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                                                <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                                    <span class="inline-block h-4 w-4 bg-indigo-300 mr-3"></span>
                                                   JAVA
                                                    <span class="text-gray-500 ml-auto">18 articles</span>
                                                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                                                </a>
                                            </li>
                                            <li
                                                class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                                                <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                                    <span class="inline-block h-4 w-4 bg-yellow-300 mr-3"></span>
                                                   PHP
                                                    <span class="text-gray-500 ml-auto">34 articles</span>
                                                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                                                </a>
                                            </li>
                                            <li
                                                class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                                                <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                                    <span class="inline-block h-4 w-4 bg-blue-300 mr-3"></span>
                                                    JAVASCRIPT
                                                    <span class="text-gray-500 ml-auto">9 articles</span>
                                                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- divider -->
                                    <div class="border border-dotted"></div>
                                    <!-- subscribe -->
                                    <div class="px-8 mt-10"
                                    style="padding: 0">
                                        <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
                                        <div
                                            class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-lg shadow-md">
                                            <ul>
                                                <li>
                                                    <a
                                                        href="#"
                                                        class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">- AWS</a>
                                                </li>
                                                <li class="mt-2">
                                                    <a
                                                        href="#"
                                                        class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">- Laravel</a>
                                                </li>
                                                <li class="mt-2">
                                                    <a
                                                        href="#"
                                                        class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">- Vue</a>
                                                </li>
                                                <li class="mt-2">
                                                    <a
                                                        href="#"
                                                        class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">- Design</a>
                                                </li>
                                                <li class="flex items-center mt-2">
                                                    <a
                                                        href="#"
                                                        class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">- Django</a>
                                                </li>
                                                <li class="flex items-center mt-2">
                                                    <a
                                                        href="#"
                                                        class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">- PHP</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="px-8 mt-10"
                                    style="padding: 0">
                                        <h1 class="mb-4 text-xl font-bold text-gray-700">Popular writing</h1>
                                        <div
                                            class="flex flex-col max-w-sm px-8 py-6 mx-auto bg-white rounded-lg shadow-md">
                                            <div class="flex items-center justify-center">
                                                <a
                                                    href="#"
                                                    class="px-2 py-1 text-sm text-green-100 bg-gray-600 rounded hover:bg-gray-500">Laravel</a>
                                            </div>
                                            <div class="mt-4">
                                                <a href="#" class="text-lg font-medium text-gray-700 hover:underline">Build Your New Idea with Laravel Freamwork.</a>
                                            </div>
                                            <div class="flex items-center justify-between mt-4">
                                                <div class="flex items-center"><img
                                                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                                    alt="avatar"
                                                    class="object-cover w-8 h-8 rounded-full">
                                                    <a href="#" class="mx-3 text-sm text-gray-700 hover:underline">Alex John</a>
                                                </div>
                                                <span class="text-sm font-light text-gray-600">Jun 1, 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- divider -->
                                    <div class="border border-dotted"></div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!-- main ends here -->

                    <!-- footer -->
                    <footer class="border-t mt-32 pt-12 pb-32 px-4 lg:px-0" style="margin: 0;">
                        <div class="flex">
                            <div class="w-full md:w-1/3 lg:w-1/4">
                                <h6 class="font-semibold text-gray-700 mb-4">Production</h6>
                                <ul>
                                    <li>
                                        <a href="" class="block text-gray-600 py-2">임채환&예승재</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-full md:w-1/3 lg:w-1/4">
                                <h6 class="font-semibold text-gray-700 mb-4">Inquiry</h6>
                                <ul>
                                    <li>
                                        <a href="" class="block text-gray-600 py-2">010-9115-2813</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </footer>
                </div>
        </body>
</html>
