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
            </div>
        </div>

        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
            <a href="{{ route('machine.home') }}" class="btn btn-success" style="float:right">
                Back to home
            </a>

            <div class="flex items-center">
                <br/><br/>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Device information</a></div>
            </div>
            <hr/>
            <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Information</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>UID</td>
                            <td>{{ $uid }}</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>User ID</td>
                            <td>{{ $userid }}</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Name</td>
                            <td>{{ $name }}</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Role</td>
                            <td>{{ $role }}</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Password</td>
                            <td>{{ $password }}</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Card No</td>
                            <td>{{ $cardno }}</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
            
        </div>

    </div>
</div>

<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
  <div class="grid grid-cols-1 md:grid-cols-1">
      

      <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
          <div class=" ">
              
          </div>
          <div class="flex items-center">
              <br/><br/>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
              <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">All registed fingerprint for user : <b>{{ $name }}</b></a></div>
          </div>
          <hr/>
          <div class="ml-12">
              <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                  <table class="table table-bordered table-responsive">
                      <thead>
                        <tr>
                          <th scope="col">Sl</th>
                          <th scope="col">Fingerprint</th>
                        </tr>
                      </thead>
                      <tbody>
                          @php 
                          $sl=1;
                          @endphp
                        
                        @foreach($userfingerprints as $userfingerprint) 
                        <tr>
                          <th scope="row">{{ $sl++ }}</th>
                          <td>{!! $userfingerprint !!}</td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
              </div>
          </div>
          
      </div>

  </div>
</div>
@endsection