@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-grey-light placeholder-grey-extra-light dark:text-white focus:ring-2 focus:ring-teal-extra-light dark:focus:ring-grey-extra-light border-gray-400 focus:border-teal-light dark:focus:border-grey dark:border-transparent border dark:focus:border-2 flex dark:placeholder-gray-200 text-center h-10 bg-white dark:bg-grey-extra-light border-transparent rounded-full font-ibm']) !!}>
