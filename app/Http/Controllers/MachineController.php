<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rats\Zkteco\Lib\ZKTeco;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function device_ip()
    {
        
        if (session()->exists('dip')) {
            $deviceip = session('dip');
        }
        else
        {
            session()->put('dip', '192.168.1.100');
            $deviceip = '192.168.1.100';
        }
        return $deviceip;
    }
    public function device_setip(Request $request)
    {
        session()->put('dip', $request->deviceip);
        return redirect()->back();
    }
    public function index()
    {
        $deviceip = $this->device_ip();
        return view('welcome',compact('deviceip'));
    }
    public function test_sound()
    {
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip,4370);
        $zk->connect(); 
        $zk->disableDevice();  
        $zk->testVoice(); 
        return redirect()->back()->with('success_message','Playing sound on device.');
    }

    public function device_information()
    {
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip,4370);
        $zk->connect(); 
        $zk->disableDevice();  
        $deviceVersion = $zk->version();
        $deviceOSVersion = $zk->osVersion();
        $devicePlatform = $zk->platform();
        $devicefmVersion = $zk->fmVersion();
        $deviceworkCode = $zk->workCode();
        $devicessr = $zk->ssr();
        $devicepinWidth = $zk->pinWidth();
        $deviceserialNumber = $zk->serialNumber();
        $devicedeviceName = $zk->deviceName();
        $devicegetTime = $zk->getTime();
        return view('device-information',compact(
            'deviceip','deviceVersion','deviceOSVersion','devicePlatform','devicefmVersion','deviceworkCode',
            'devicessr','devicepinWidth','deviceserialNumber','devicedeviceName','devicegetTime',
        ));
    }

    public function device_data()
    {
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip,4370);
        $zk->connect(); 
        $zk->disableDevice();  
        $users = $zk->getUser();
        $attendaces = $zk->getAttendance();
        return view('device-data',compact(
            'deviceip','users','attendaces',
        ));
    }
    public function device_data_clear_attendance()
    {
        $deviceip = $this->device_ip();

        $zk = new ZKTeco($deviceip,4370);
        $zk->connect(); 
        $zk->disableDevice();  
        $zk->clearAttendance();

        return redirect()->back()->with('success_message','Attendance cleared successfully.');
    }

    public function device_restart()
    {
        $deviceip = $this->device_ip();

        $zk = new ZKTeco($deviceip,4370);
        $zk->connect(); 
        $zk->disableDevice();  
        $zk->restart();

        return redirect()->back()->with('success_message','Device restart successfully.');
    }

    public function device_shutdown()
    {
        $deviceip = $this->device_ip();

        $zk = new ZKTeco($deviceip,4370);
        $zk->connect(); 
        $zk->disableDevice();  
        $zk->shutdown();

        return redirect()->back();
    }

    public function device_adduser()
    {
        $deviceip = $this->device_ip();
        return view('device-adduser',compact('deviceip'));
    }

    public function device_setuser(Request $request)
    {
       $deviceip = $this->device_ip();
       $uid = $request->uid;
       $userid = $request->userid;
       $name = $request->name;
       $role = (int)$request->role;
       $password = $request->password;
       $cardno = $request->cardno;
       //dd($request->role);
       $zk = new ZKTeco($deviceip,4370);
       $zk->connect(); 
       $zk->disableDevice();  
       $zk->setUser($uid , $userid , $name , $role , $password , $cardno);

       return redirect()->back()->with('success_message','User added to device successfully.');
    }

    public function device_removeuser_single($uid)
    {
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip,4370);
        $zk->connect(); 
        $zk->disableDevice();  
        $zk->removeUser($uid);

        return redirect()->back()->with('success_message','User removed from device successfully.');
    }

    public function device_viewuser_single(Request $request)
    {
        $deviceip = $this->device_ip();
        $uid = $request->uid;
        $userid = $request->userid;
        $name = $request->name;
        $role = (int)$request->role;
        $password = $request->password;
        $cardno = $request->cardno;

        $zk = new ZKTeco($deviceip,4370);
        $zk->connect(); 
        $userfingerprints=$zk->getFingerprint($request->uid);
        
        // foreach($userfingerprints as $userfingerprint)
        // {
        //     $imagearray= unpack("C*",$userfingerprint); 
        // }
        // $data = implode('', array_map(function($e) {
        //     return pack("C*", $e);
        // }, $$userfingerprint));
        // echo $data;
        // dd($data);
        
        //dd($userfingerprints);
        return view('device-information-user',compact(
            'deviceip','uid','userid','name',
            'role','password','cardno','userfingerprints',
        ));
    }
}
