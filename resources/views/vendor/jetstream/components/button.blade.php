<button {{ $attributes->merge(['type' => 'submit', 'class' => 'dark:text-grey-dark inline-flex items-center px-4 py-2 bg-teal border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-light active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
