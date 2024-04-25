@php
    
$annee = date('Y');
@endphp 
<footer>
    <footer class="relative bg-clr-sec2 bg-opacity-5 pt-8 pb-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-left lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl fonat-semibold text-clr-pri1">Des commentaires&nbsp;?</h4>
                    <h5 class="text-lg mt-0 mb-2 text-clr-pri1">
                        Rejoignez-nous sur nos plateformes sociales.
                    </h5>
                    <div class="mt-6 lg:mb-0 mb-6">
                        <button
                            class="bg-white text-clr-pri1 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-twitter"></i></button>
                            <button
                            class="bg-white text-clr-pri1 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-facebook-square"></i></button><button
                            class="bg-white text-clr-pri1 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-dribbble"></i></button><button
                            class="bg-white text-clr-pri1 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-clr-pri2 text-sm font-semibold mb-2">Liens utililes</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-clr-pri1 hover:text-clr-pri1 font-semibold block pb-2 text-sm"
                                        href="/about">@lang('About')</a>
                                </li>
                                <li>
                                    <a class="text-clr-pri1 hover:text-clr-pri1 font-semibold block pb-2 text-sm"
                                        href="/forfait">@lang('Pricing')</a>
                                </li>
                                <li>
                                    <a class="text-clr-pri1 hover:text-clr-pri1 font-semibold block pb-2 text-sm"
                                        href="/">@lang('Home')</a>
                                </li>

                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-clr-pri2 text-sm font-semibold mb-2">Autres ressources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-clr-pri1 hover:text-clr-pri1 font-semibold block pb-2 text-sm"
                                        href="#">Termes &amp; Conditions</a>
                                </li>
                                <li>
                                    <a class="text-clr-pri1 hover:text-clr-pri1 font-semibold block pb-2 text-sm"
                                        href="#">Vie privée</a>
                                </li>
                                <li>
                                    <a class="text-clr-pri1 hover:text-clr-pri1 font-semibold block pb-2 text-sm"
                                        href="/contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-clr-pale1 opacity-5">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-clr-pri2 font-semibold py-1">
                        Copyright © <span id="get-current-year">@php
                            echo $annee;
                        @endphp</span><a
                            href="#"
                            class="text-clr-pri2 hover:text-gray-800" target="_blank"> Créé par
                            <a href="https://www.creative-tim.com?ref=njs-profile"
                                class="text-clr-pri2 hover:text-clr-pri1">RDM WEB</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>

</footer>
