<x-layout>

       <x-card class="p-10 max-w-lg mx-auto mt-24">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Register
                </h2>
                <p class="mb-4">Create an account to post gigs</p>
            </header>
           <div id="message"></div>

            <form id="register_form" >
                <div class="mb-6">
                    <label for="name" class="inline-block text-lg mb-2">
                        Name
                    </label>
                    @csrf
                    <input id="name" type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}"/>

                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">Email</label>
                    <input id="email" type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}"/>

                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="inline-block text-lg mb-2">
                        Password
                    </label>
                    <input id="password" type="password" class="border border-gray-200 rounded p-2 w-full" name="password" value="{{old('password')}}"/>

                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password2" class="inline-block text-lg mb-2">
                        Confirm Password
                    </label>
                    <input id="password_confirm" type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" value="{{old('password_confirmation')}}"/>

                    @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button id="register_button" type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                        Sign Up
                    </button>
                </div>

                <div class="mt-8">
                    <p>
                        Already have an account?
                        <a href="/login" class="text-laravel">Login</a>
                    </p>
                </div>
            </form>
       </x-card>
</x-layout>

<script>
    $(document).ready(function () {
        $('#register_form').on('submit', function (e) {
            e.preventDefault(); // Prevent the default form submission

            // Collect form data
            const formData = {
                _token: $('[name="_token"]').val(),
                name: $('#name').val(),
                email: $('#email').val(),
                password: $('#password').val(),
                password_confirmation: $('#password_confirm').val(),
            };
            // Log the data being sent
            console.log('Form Data:', formData);
// AJAX request
            $.ajax({
                url: '/users', // Laravel route for registration
                method: 'POST',
                data:formData,
                success: function (response) {
                    // $('#message').html(`<p style="color: green;">${response.message}</p>`);
                    // $('#register_form')[0].reset(); // Reset the form
                    window.location.href = `/?success=${encodeURIComponent(response.message)}`;
                },
                error: function (xhr) {
                    // Parse and display validation errors
                    const errors = xhr.responseJSON.errors;
                    let errorMessages = '';
                    for (const key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            errorMessages += `<p style="color: red;">${errors[key][0]}</p>`;
                        }
                    }
                    $('#message').html(errorMessages);
                }
            });
        });
    });
</script>
