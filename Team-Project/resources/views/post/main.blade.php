<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <style>
        .max-w-4xl {
            width: 800px;

        }
    </style>
    <body>
        <div class="max-w-screen-xl mx-auto">
            <!-- header -->
            <header class="flex items-center justify-between py-2 border-b"
            style="margin-top:10px">
                <a
                    href=""
                    class="px-2 lg:px-0 uppercase font-bold text-purple-800">
                    Login
                </a>
                <ul class="inline-flex items-center">
                    <li class="px-2 md:px-4">
                        <a href="프로필.html" class="text-purple-600 font-semibold hover:text-purple-500">
                            프로필
                        </a>
                    </li>
                    <li class="px-2 md:px-4">
                        <a href="{{ route('post.made') }}" class="text-gray-500 font-semibold hover:text-purple-500">
                            포스트
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
                        <a href="{{ route('register') }}" class="text-gray-500 font-semibold hover:text-purple-500">
                            Register
                        </a>
                    </li>

                    <!-- 로그인 중이 아니면 login, 로그인 중이면 logout -->
                    @if (!Auth::check())
                    <li class="px-2 md:px-4 hidden md:block">
                        <a href="{{ route('login') }}" class="text-gray-500 font-semibold hover:text-purple-500">
                            Login
                        </a>
                    </li>
                    @else
                    <li class="px-2 md:px-4 hidden md:block">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" >
                            @csrf
                            <a class="text-gray-500 font-semibold hover:text-purple-500" :href="route('logout')"
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
                    <a
                        class="mb-4 md:mb-0 w-full md:w-2/3 relative rounded inline-block"
                        style="height: 24em;"
                        href="./blog.html">
                        <div
                            class="absolute left-0 bottom-0 w-full h-full z-10"
                            style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
                        <img
                            src="https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80"
                            class="absolute left-0 top-0 w-full h-full rounded z-0 object-cover"/>
                        <div class="p-4 absolute bottom-0 left-0 z-20">
                            <span
                                class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">Nutrition</span>
                            <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                                Pellentesque a consectetur velit, ac molestie ipsum. Donec sodales, massa et
                                auctor.
                            </h2>
                            <div class="flex mt-3">
                                <img
                                    src="https://randomuser.me/api/portraits/men/97.jpg"
                                    class="h-10 w-10 rounded-full mr-2 object-cover"/>
                                <div>
                                    <p class="font-semibold text-gray-200 text-sm">
                                        Mike Sullivan
                                    </p>
                                    <p class="font-semibold text-gray-400 text-xs">
                                        14 Aug
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- eslint-disable -->

                    <div
                        class="bg-white my-12 pb-6 w-full justify-center items-center overflow-hidden md:max-w-sm rounded-lg shadow-sm mx-auto"
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

                        @if (Auth::check())
                        <div
                            class="">
                            <img
                                class=""
                                src="{{ Auth::user()->profileImagePath() }}" style="width: 50px; height:50px" >
                        </div>

                        <div class="mt-16">
                            <h1 class="text-lg text-center font-semibold">
                                {{ Auth::user()->name }}
                            </h1>
                            <h1 class="text-sg text-center">
                                작성한 게시물: {{ $users = Auth::user()->posts()->count(); }}개
                            </h1>

                        </div>
                        @else
                            <div
                                class="relative shadow mx-auto h-24 w-24 -my-12 border-white rounded-full overflow-hidden border-4">
                                <img
                                     class="object-cover w-full h-full"
                                     src="">
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

                <div class="block lg:flex lg:space-x-2 px-2 lg:p-0 mt-10 mb-10">
                    <div class="px-6 py-8"
                    style="padding: 0;">
                        <div class="container flex justify-between mx-auto"
                        style="width: 850px;">
                            <div class="w-full lg:w-8/12">
                                <div class="flex items-center justify-between"
                                style="width: 800px;">
                                    <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Post</h1>
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
                                    <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
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
                                            <a href="글.html" class="text-blue-500 hover:underline">Read more</a>
                                            <div>
                                                <a href="#" class="flex items-center"><img
                                                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                                    alt="avatar"
                                                    class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                                    <h1 class="font-bold text-gray-700 hover:underline"> {{ $post->user->name }}</h1>
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
                    <div class="w-full lg:w-1/3 px-3">
                        <!-- topics -->
                        <div class="mb-4">
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

                        <!-- divider -->
                        <div class="border border-dotted"></div>

                        <!-- subscribe -->
                        <div class="px-8 mt-10">
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
                        <div class="px-8 mt-10">
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
                style="margin: 0 0 0 50px;">
                <div class="flex">

                    <div class="w-full md:w-1/3 lg:w-1/4">
                        <h6 class="font-semibold text-gray-700 mb-4">Company</h6>
                        <ul>
                            <li>
                                <a href="" class="block text-gray-600 py-2">Team</a>
                            </li>
                            <li>
                                <a href="" class="block text-gray-600 py-2">About us</a>
                            </li>
                            <li>
                                <a href="" class="block text-gray-600 py-2">Press</a>
                            </li>
                        </ul>
                    </div>

                    <div class="w-full md:w-1/3 lg:w-1/4">
                        <h6 class="font-semibold text-gray-700 mb-4">Content</h6>
                        <ul>
                            <li>
                                <a href="" class="block text-gray-600 py-2">Blog</a>
                            </li>
                            <li>
                                <a href="" class="block text-gray-600 py-2">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="" class="block text-gray-600 py-2">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="" class="block text-gray-600 py-2">Documentation</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </footer>
        </div>
    </body>
</html>
