@extends('layouts.app')
@section('content')
    <div class="bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-5 my-2">
        <div class="flex justify-end px-4 pt-4">
        </div>
        <div class="flex flex-col items-center pb-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="https://www.ktoeos.org/wp-content/uploads/2021/11/default-avatar.png" alt="User Avatar"/>
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ Auth::user()->email }}</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">Site Üyesi</span>
            <div class="flex mt-4 space-x-3 md:mt-6">
                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="fas fa-user-plus"></i>&nbsp; Ekle</a>
                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700"><i class="fas fa-message"></i>&nbsp;Mesaj Gönder</a>
            </div>
            <div class="p-3 mx-2 my-2 bg-gray-600 text-gray-100 rounded">
                <h2 class="font-bold text-center text-gray-900 text-3xl">Kullanıcı Hakkında</h2>
                <p class="my-3">
                    Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris vitae nulla eu quam scelerisque ornare nec et dolor. Cras placerat eros nec mollis congue. Curabitur et feugiat dui. Sed nec neque quis neque tincidunt laoreet at nec lorem. Donec fermentum, lorem at condimentum efficitur, nisi nibh finibus nulla, quis bibendum leo magna nec augue. Proin rhoncus nisl tortor, vel finibus lorem commodo in. Vestibulum congue purus neque, eu commodo velit sagittis vitae. In sit amet tincidunt nibh. Vivamus convallis orci vel metus eleifend placerat. Nulla ultrices scelerisque sem vel rutrum. Sed sed augue vel erat hendrerit varius nec sed risus.
                    Duis varius quam sit amet faucibus elementum. Nunc molestie a leo nec suscipit. Nulla at ultrices diam, ut tristique risus. Nulla est lorem, pulvinar at ornare non, pulvinar vel nisl. Phasellus mattis magna non nisi dapibus ornare. Phasellus aliquet eleifend interdum. Sed a suscipit nisi. Aliquam et dui dolor. Proin nibh erat, consequat vitae turpis vel, lobortis vulputate risus. Pellentesque id tincidunt orci, ac vulputate felis. Proin id ante hendrerit, pharetra lectus vitae, fermentum massa.
                </p>
                <p class="my-3">
                    Quisque eget leo porttitor, eleifend lectus et, posuere massa. Ut efficitur massa eget elit efficitur, sed tristique turpis convallis. Duis tristique nibh in placerat volutpat. Nam consectetur arcu vulputate nisi molestie, ut tincidunt tortor pellentesque. Praesent faucibus luctus ante ac facilisis. Nulla id est id arcu commodo fringilla. Maecenas metus purus, rutrum sit amet suscipit eu, sagittis ac massa. Aliquam erat volutpat. Curabitur viverra dignissim est. Fusce ipsum nunc, pulvinar et velit id, tempus consectetur ex. Cras porttitor nisl ut metus vestibulum, feugiat congue sapien porta. Proin sodales nulla elementum sapien gravida mattis.
                </p>
                <p class="my-3">
                    Pellentesque pharetra commodo elit, in malesuada neque volutpat a. Aliquam eu lacinia dui. Aliquam vel ornare metus. Nullam nulla purus, condimentum eu leo sed, lacinia mattis dui. Nullam at dignissim justo. Donec accumsan purus quam. Phasellus placerat arcu nec elementum imperdiet. Aliquam sed tellus erat. Vivamus ornare, eros sed ultrices dignissim, dui urna ultrices mi, at fermentum mauris mauris quis risus. Donec dapibus leo eu elit interdum, nec consectetur neque mollis. Sed in urna odio. Aenean accumsan, lectus eu finibus porta, ipsum dolor lacinia urna, ut congue orci orci at turpis.
                </p>
            </div>
        </div>
    </div>
@endsection