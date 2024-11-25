<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Login
            </h2>
            <p class="mb-4">Login your account to post gigs</p>
        </header>

        <form  id="login_form">
            @csrf
            <div id="message"></div>
            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}"/>

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">
                    Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" value="{{old('password')}}"/>

                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Sign In
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Don't have an account?
                    <a href="/register" class="text-laravel">Register</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>

<script>
    $(document).ready(function () {
        $('#login_form').on('submit', function (e) {
            e.preventDefault(); // Prevent the default form submission

            // Collect form data
            const formData = {
                _token: $('[name="_token"]').val(),
                email: $('[name="email"]').val(),
                password: $('[name="password"]').val(),
            };
            // Log the data being sent
            console.log( formData);
// AJAX request
            $.ajax({
                url: '/users/authenticate', // Laravel route for login
                method: 'POST',
                data:formData,
                success: function (response) {
                    // $('#message').html(`<p style="color: green;">${response.message}</p>`);
                    // $('#register_form')[0].reset(); // Reset the form
                    window.location.href = `/?success=${encodeURIComponent(response.message)}`;
                },
                error: function (xhr) {
                    const errors = xhr.responseJSON.errors;
                    $('#message').append(`<p style="color: red;">${errors}</p>`);
                }
            });
        });
    });
</script>
