@extends('header')


@section('adminContante')


    <div id="app">

        <section class="is-hero-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <h1 class="title">
                    Dashboard
                </h1>
                <button class="button light">Button</button>
            </div>
        </section>

        <section class="section main-section">
            <div class="card has-table">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                        Clients
                    </p>
                    <a href="#" class="card-header-icon">
                        <span class="icon"><i class="mdi mdi-reload"></i></span>
                    </a>
                </header>
                <div class="card-content">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Company</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Level</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (session('success'))
                                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                                    role="alert" id="alert">
                                    <span class="block sm:inline">{{ session('success') }}</span>
                                </div>
                            @endif
                            @php($count = 1)
                            @foreach ($myData as $myData)
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td data-label="Company"><a href="{{ route('contactDtls', $myData->id) }}"
                                            style="color:rgb(0, 102, 255);font-weight: 600;">{{ $myData->company }}</a></td>
                                    <td data-label="City">{{ $myData->phone }}</td>
                                    <td data-label="Progress">{{ $myData->email }}</td>
                                    <td data-label="Created">{{ $myData->address }}</td>
                                    <td data-label="Created">{{ $myData->post }}</td>
                                    <td class="actions-cell">
                                        <div class="buttons right nowrap">
                                            <a href="Add_contacts/{{ $myData->id }}">
                                                <button class="button small green --jb-modal" data-target="sample-modal-2"
                                                    type="button">
                                                    <span class="icon"><i class="fa-solid fa-plus"></i></span>
                                                </button>
                                            </a>
                                            <a href="edit_record/{{ $myData->id }}">
                                                <button class="button small green --jb-modal" data-target="sample-modal-2"
                                                    type="button">
                                                    <span class="icon"><i class="fa-solid fa-user-pen"></i></span>
                                                </button>
                                            </a>
                                            <a href="destroy/{{ $myData->id }}"
                                                onclick="return confirm('Are you sure to delete?')">
                                                <button class="button small red --jb-modal" data-target="sample-modal"
                                                    type="button">
                                                    <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @php($count++)
                            @endforeach

                        </tbody>
                    </table>


                    <div class="table-pagination">
                        <div class="flex items-center justify-between">
                            <div class="buttons">
                                <button type="button" class="button active">1</button>
                                <button type="button" class="button">2</button>
                                <button type="button" class="button">3</button>
                            </div>
                            <small>Page 1 of 3</small>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>


    </body>

    </html>
