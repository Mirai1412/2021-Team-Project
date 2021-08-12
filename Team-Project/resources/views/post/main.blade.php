<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <div class="max-w-screen-xl mx-auto" style="width: 2400px; margin: 0 auto;">
            <!-- header -->
            <header
                class="flex items-center justify-between py-2 border-b"
                style="margin-top:10px; width: 1280; ">

                <input type="checkbox" id="menuicon">
                <label for="menuicon" style="">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <div class="sidebar">
                    <h1
                        style="color: white; font-size: 20px; margin: 50px 15px 0 0;
                    text-align: right">Code</h1>
                    <h1
                        style="color: white; font-size: 20px; margin: 50px 15px 0 0;
                     text-align: right">공지사항</h1>
                    <h1
                        style="color: white; font-size: 20px; margin: 50px 15px 0 0;
                      text-align: right">뉴스</h1>
                    <h1
                        style="color: white; font-size: 20px; margin: 50px 15px 0 0;
                    text-align: right">문서</h1>
                </div>
                <a
                    href="{{ route('post.main') }}"
                    class="px-2 lg:px-0 uppercase font-bold text-purple-800"
                    style="margin: 0 530px 0 0">

                    Code Finder
                </a>
                <ul class="inline-flex items-center">
                    <li class="px-2 md:px-4">
                        <a href="" class="text-purple-600 font-semibold hover:text-purple-500">
                            프로필
                        </a>
                    </li>
                    <li class="px-2 md:px-4">
                        <a
                            href="{{ route('post.made') }}"
                            class="text-gray-500 font-semibold hover:text-purple-500">
                            글쓰기
                        </a>
                    </li>
                    <li class="px-2 md:px-4">
                        <a href="채팅.html" class="text-gray-500 font-semibold hover:text-purple-500">
                            채팅
                        </a>
                    </li>
                    <li class="px-2 md:px-4">
                        <a href="rlt.html" class="text-gray-500 font-semibold hover:text-purple-500">
                            git
                        </a>
                    </li>
                    <li class="px-2 md:px-4">
                        <a href="달력.html" class="text-gray-500 font-semibold hover:text-purple-500">
                            달력
                        </a>
                    </li>

                    <li class="px-2 md:px-4 hidden md:block">
                        <a
                            href="{{ route('register') }}"
                            class="text-gray-500 font-semibold hover:text-purple-500">
                            Register
                        </a>
                    </li>

                    <!-- 로그인 중이 아니면 login, 로그인 중이면 logout -->
                    @if (!Auth::check())
                    <li class="px-2 md:px-4 hidden md:block">
                        <a
                            href="{{ route('login') }}"
                            class="text-gray-500 font-semibold hover:text-purple-500">
                            Login
                        </a>
                    </li>
                    @else
                    <li class="px-2 md:px-4 hidden md:block">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a
                                class="text-gray-500 font-semibold hover:text-purple-500"
                                :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                    @endif
                </ul>

            </header>
            <!-- header ends here -->

            <main class="mt-10">
                <div class="block md:flex md:space-x-2 px-2 lg:p-0">

                    <div
                        style="border: solid 1px black; width: 870px; height: 300px;"
                        class="section">
                        <input
                            type="radio"
                            name="slide"
                            id="slide01"
                            checked="checked"
                            style="display: none;">
                        <input type="radio" name="slide" id="slide02" style="display: none;">
                        <input type="radio" name="slide" id="slide03" style="display: none;">

                        <div class="slidewrap">
                            <ul class="slidelist">
                                <li>
                                    <a>
                                        <img src="/img/05.jpg">
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <img src="/img/02.jpg">
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <img src="/img/01.jpg">
                                    </a>
                                </li>
                                <div class="slide-control">
                                    <div class="control01">
                                        <label for="slide03" class="left"></label>
                                        <label for="slide02" class="right"></label>
                                    </div>
                                    <div class="control02">
                                        <label for="slide01" class="left"></label>
                                        <label for="slide03" class="right"></label>
                                    </div>
                                    <div class="control03">
                                        <label for="slide02" class="left"></label>
                                        <label for="slide01" class="right"></label>
                                    </div>
                                </div>
                            </ul>
                        </div>
                        {{-- <img src="{{ asset('img/01.jpg') }}" > --}}
                        {{-- <img src="/img/01.jpg" > --}}
                    </div>

                    <!-- eslint-disable -->

                    <div
                        class="bg-white my-12 pb-6 w-full justify-center items-center overflow-hidden md:max-w-sm rounded-lg shadow-sm mx-auto"
                        style="margin: 0 0 0 10px; border: solid 1px black;  height: 300px;">

                        @if (Auth::check())
                        <div class="mt-16" style="margin-top: 25px">
                            <img
                                class=""
                                src="{{ Auth::user()->profileImagePath() }}"
                                style="width: 100px; height:100px; margin: 0 auto">
                            <h1 class="text-lg text-center font-semibold">
                                {{ Auth::user()->name }}
                            </h1>
                            <h1 class="text-sg text-center">
                                작성한 게시물:
                                {{ $users = Auth::user()->posts()->count(); }}개
                            </h1>
                        </div>
                        @else
                        <div
                            class="relative shadow mx-auto h-24 w-24 -my-12 border-white rounded-full overflow-hidden border-4">
                            <img class="object-cover w-full h-full" src="">
                        </div>
                        <div class="mt-16">
                            <h1 class="text-lg text-center font-semibold">
                                로그인 바랍니다.
                            </h1>
                        </div>
                        @endif

                        <div class="mt-6 pt-3 flex flex-wrap mx-6 border-t">
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
                    </div>

                </div>
            </a>

            <div
                class="block lg:flex lg:space-x-2 px-2 lg:p-0 mt-10 mb-10"
                style="margin-top: 10px">
                <div class="px-6 py-8" style="padding: 0; border: solid 1px black;">
                    <div class="container flex justify-between mx-auto" style="width: 870px;">
                        <div class="w-full lg:w-8/12" style="width: 850px;">
                            <div
                                class="flex items-center justify-between"
                                style="width: 796px; margin: 15px 0 0 27px">
                                <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Popular Writing</h1>
                                <div>
                                    <select
                                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <option>Latest</option>
                                        <option>Last Week</option>
                                    </select>
                                </div>
                            </div>

                            @foreach ($posts as $post )

                            <div class="mt-6">
                                <div
                                    class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md"
                                    style="margin: 0 0 0 25px; width: 800px;">
                                    <div class="flex items-center justify-between">
                                        <span class="font-light text-gray-600">{{ $post->created_at->diffForHumans() }}</span>
                                        <a
                                            href="#"
                                            class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Laravel</a>
                                    </div>
                                    <div class="mt-2">
                                        <a href="#" class="text-2xl font-bold text-gray-700 hover:underline">{{ $post->title }}</a>
                                        <p class="mt-2 text-gray-600">{!! $post->content !!}</p>
                                    </div>
                                    <div class="flex items-center justify-between mt-4">
                                        <a
                                            href="{{ route('post.show', ['id' => $post]) }}"
                                            class="text-blue-500 hover:underline">Read more</a>
                                        <div>
                                            <a href="#" class="flex items-center"><img
                                                src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                                alt="avatar"
                                                class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                                <h1 class="font-bold text-gray-700 hover:underline">
                                                    {{ $post->user->name }}</h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <!-- right sidebar -->
                <div class="w-full lg:w-1/3 px-3" style="border: solid 1px black;width: 384px;">
                    <!-- topics -->
                    <div
                        class="mb-4"
                        style=" width: 300px;
                    margin: 0 auto; margin-top: 10px">
                        <h5 class="font-bold text-lg uppercase text-gray-700 px-1 mb-2">
                            Popular Topics
                        </h5>
                        <ul>
                            <li
                                class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                                <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                    <span class="inline-block h-4 w-4 bg-green-300 mr-3"></span>
                                    Nutrition
                                    <span class="text-gray-500 ml-auto">23 articles</span>
                                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                                </a>
                            </li>
                            <li
                                class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                                <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                    <span class="inline-block h-4 w-4 bg-indigo-300 mr-3"></span>
                                    Food & Diet
                                    <span class="text-gray-500 ml-auto">18 articles</span>
                                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                                </a>
                            </li>
                            <li
                                class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                                <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                    <span class="inline-block h-4 w-4 bg-yellow-300 mr-3"></span>
                                    Workouts
                                    <span class="text-gray-500 ml-auto">34 articles</span>
                                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                                </a>
                            </li>
                            <li
                                class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                                <a href="#" class="flex items-center text-gray-600 cursor-pointer">
                                    <span class="inline-block h-4 w-4 bg-blue-300 mr-3"></span>
                                    Immunity
                                    <span class="text-gray-500 ml-auto">9 articles</span>
                                    <i class='text-gray-500 bx bx-right-arrow-alt ml-1'></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- subscribe -->
                    <div
                        class="px-8 mt-10"
                        style="width: 350px; padding: 10px;
                    margin: 5px">
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
                    <div class="px-8 mt-10" style=" width: 350px; padding: 10px;">
                        <h1 class="mb-4 text-xl font-bold text-gray-700">Recent Post</h1>
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
        </main>
        <!-- main ends here -->

        <!-- footer -->
        <footer
            class="border-t mt-32 pt-12 pb-32 px-4 lg:px-0"
            style="margin: 0 0 0 0px; ">
            <div class="flex">

                <div class="w-full md:w-1/3 lg:w-1/4" style="width: 700px; margin-left: 50px">
                    <h6 class="font-semibold text-gray-700 mb-4">CodeFinder</h6>
                    <ul>
                        <li>
                            <p>
                                대표자 : 임채환 | 등록번호 : 1801233 | 주소 : 대구광역시 북구 복현로 35(복현동)</ㅔ>
                        </li>
                        <li>
                            <p>
                                개인정보관리책임자 : 예승재(tmdwo7017@naver.com)</p>
                        </li>
                        <br>
                        <li>
                            <p>관리자는 절대 개인정보 및 전화번호를 개인적으로 묻지 않습니다.
                            </p>
                            <p>개인의 부주의로 발생하는 사고에 대해서는 CodeFinder는 책임지지 않습니다.
                            </p>
                        </li>
                        <br>
                    </ul>
                </div>

                <div class="w-full md:w-1/3 lg:w-1/4" style="width: 700px; margin-left: 50px">
                    <h6 class="font-semibold text-gray-700 mb-4">고객센터 1692-0825</h6>
                    <ul>
                        <li>
                            <p>영업시간 AM 10:00 ~ PM 17:00 (주말 및 공휴일 휴무)</p>
                        </li>
                        <li>
                            <p>점심시간 PM 12:30 ~ PM 13:30</p>
                        </li>
                        <div class="link"></div>
                    </ul>
                </div>

            </div>
        </footer>
    </div>
</body>
</html>
