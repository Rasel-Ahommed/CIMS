@extends('header')

<style>
    .addCustomerForm {
        padding: 10px;
    }

    .addCustomerForm input {
        padding: 10px;
        width: 100%;
        border: 1px solid;
        border-radius: 5px;
    }

    .submitBox {
        display: flex;
        justify-content: center;
        padding-top: 20px;
    }

    .submitBox #submit {
        width: auto;
        padding: 15px 40px;
        background: #0897BF;
        color: white;
        border-radius: 10px;
        cursor: pointer;
    }
</style>
@section('adminContante')

    <div id="app">

        <section class="is-hero-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <h1 class="title">
                    Edit Customer
                </h1>
                <button class="button light">Button</button>
            </div>
        </section>

        <div class="addCustomerForm">
            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert"
                    id="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert"
                    id="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <form action="{{ route('update', $data->id) }}" method="POST">
                @csrf
                <table>
                    {{-- group 1 --}}
                    <tr>
                        <td>
                            <label for="company name">Company Name<span style="color: red">*</span></label>
                        </td>
                        <td>
                            <label for="phone">Phone<span style="color: red">*</span></label>
                        </td>
                        <td>
                            <label for="Email">Email</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="company" type="text" value="{{ $data->company }}">
                            @error('Company')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        <td>
                            <input name="phone" type="number" value="{{ $data->phone }}">
                            @error('phone')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <input name="email" type="email" value="{{ $data->email }}">
                            @error('email')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>

                    {{-- group 2 --}}
                    <tr>
                        <td>
                            <label for="address">Address<span style="color: red">*</span></label>
                        </td>
                        <td>
                            <label for="Post">Level</label>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="address" type="text" value="{{ $data->address }}">
                            @error('address')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        <td>
                            <input name="post" type="text" value="{{ $data->post }}">
                            @error('post')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                </table>
                <div class="submitBox">
                    <input type="submit" value="SUBMIT" id="submit">
                </div>

            </form>
        </div>
