@extends('layout.layout')

@section('content')

<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="p-6">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class=" text-gray-900 dark:text-white">
                Laravel Zkteco <b>( iclock9000-G )</b>
                </a></div>
            </div>
            <br/>
            <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <img src="{{ asset('machine.jpg') }}" style="width: 100%;"/>
                </div>
                <br/>
                <form action="{{ route('machine.devicesetip') }}" method="post">
                    @csrf
                <div class="row">
                    <div class="col-9">
                        <input type="text" name="deviceip" class="form-control" required />
                    </div>
                    <div class="col-3">
                        <button class="btn btn-success" style="width: 100%">Set IP</button>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">About device</a></div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <b>iClock9000-G</b> is an innovative product featured with ZK advanced fingerprint
                    recognition technologies. It supports multiple verification methods including
                    fingerprint, card, password, combinations between them and basic access control
                    functions. User verification is performed in less than 1 second, which streamlines the process of access.
                    <br/><br/>
                    The communication between the <b>iClock9000-G</b> and PC is by TCP / IP or USB
                    interface for manual data transfer. Its sleek design fits perfectly in any environment.<b>iClock9000-G</b> is an innovative product featured with ZK advanced fingerprint recognition technologies. It supports multiple verification methods including
                    fingerprint, card, password, combinations between them and basic access control
                    functions.
                    <br/>
                    User verification is performed in less than 1 second, which streamlines the process of
                    access. The communication between the <b>iClock9000-G</b> and PC is by TCP / IP or USB
                    interface for manual data transfer. Its sleek design fits perfectly in any environment.
                </div>
            </div>
            <hr/>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" /></svg>
                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Test device : Testing IP({{ $deviceip }})</a></div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <a href="{{ route('machine.testsound') }}" class="btn btn-success btn-sm" style="margin: 5px">Test device sound</a>

                    <a href="{{ route('machine.deviceinformation') }}" class="btn btn-success btn-sm" style="margin: 5px">Device information</a>

                    <a href="{{ route('machine.devicedata') }}" class="btn btn-success btn-sm" style="margin: 5px">Device data</a>

                    <a href="{{ route('machine.devicedata.clear.attendance') }}" class="btn btn-success btn-sm" style="margin: 5px">Clear attendance</a>

                    <a href="{{ route('machine.devicerestart') }}" class="btn btn-success btn-sm" style="margin: 5px">Restart device</a>

                    <a href="{{ route('machine.deviceshutdown') }}" class="btn btn-success btn-sm" style="margin: 5px">Shutdown device</a>

                    <a href="{{ route('machine.deviceadduser') }}" class="btn btn-success btn-sm" style="margin: 5px">Add user to device</a>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection