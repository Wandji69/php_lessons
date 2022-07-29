Skip to content
DEV Community
Search...

Log in
Create account

0

0

3

Cover image for Laravel User Management - 3
shani singh
shani singh
Posted on Jun 7, 2021

Laravel User Management - 3
#
laravel
#
programming
#
php
#
tutorial
Laravel User Management

In The last post i have explained about Create User, Form Validation, Try Catch, Database Transactions, Read More at Laravel User Management - 2

In This post i am going to explain about User Edit and Delete in Laravel.

First We will add a new button in users list table
<a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary m-2">
    <i class="fa fa-pen"></i>
</a>
Now Let's add edit.blade.php inside users view.
@extends('layouts.master')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Users</h1>
        <a href="{{route('users.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('users.update', ['user' => $user->id])}}">
                @csrf
                @method('PUT')
                <div class="form-group row">

                    {{-- Name --}}
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Name</label>
                        <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="exampleName" placeholder="Name" name="name" value="{{ old('name') ? old('name') : $user->name }}">

                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                    {{-- Email --}}
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Email</label>
                        <input type="text" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleEmail" placeholder="Email" name="email" value="{{ old('email') ? old('email') : $user->email }}">

                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                </div>

                {{-- Save Button --}}
                <button type="submit" class="btn btn-success btn-user btn-block">
                    Update
                </button>

            </form>
        </div>
    </div>

</div>


@endsection
Next Will update edit function of UserController
public function edit($id)
{
$user = User::whereId($id)->first();

if(!$user){
return back()->with('error', 'User Not Found');
}

return view('users.edit')->with([
'user' => $user
]);
}
Next Will Update the update Function of UserController
public function update(Request $request, $id)
{
$request->validate([
'name' => 'required',
'email' => 'required|email'
]);

try {
DB::beginTransaction();
// Logic For Save User Data

$update_user = User::where('id', $id)->update([
'name' => $request->name,
'email' => $request->email
]);

if(!$update_user){
DB::rollBack();

return back()->with('error', 'Something went wrong while update user data');
}

DB::commit();
return redirect()->route('users.index')->with('success', 'User Updated Successfully.');


} catch (\Throwable $th) {
DB::rollBack();
throw $th;
}
}
That's it Our Edit functionality is working fine, Let's Add Delete button on list users
<td style="display: flex">
    <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary m-2">
        <i class="fa fa-pen"></i>
    </a>
    <form method="POST" action="{{ route('users.destroy', ['user' => $user->id]) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger m-2" type="submit">
            <i class="fa fa-trash"></i>
        </button>
    </form>
</td>
Next will Update Destroy Function in UserController
public function destroy($id)
{
try {
DB::beginTransaction();

$delete_user = User::whereId($id)->delete();

if(!$delete_user){
DB::rollBack();
return back()->with('error', 'There is an error while deleting user.');
}

DB::commit();
return redirect()->route('users.index')->with('success', 'User Deleted successfully.');



} catch (\Throwable $th) {
DB::rollBack();
throw $th;
}
}
You can access this code on TechTool India Github Repo.

You can watch the explanation video for more clarity.


In Next part i will explain about edit and delete user.

Thank You for Reading

In case of any query related to LARAVEL.
Reach Out To me.
Twitter
Instagram
TechToolIndia

Discussion (0)
Subscribe
pic
Add to the discussion
Code of Conduct • Report abuse
Read next
harshhhdev profile image
Why ORMs Aren't Always a Great Idea
Harsh Singh - Jul 16

vishnu10kk profile image
Best roadmap for laravel in 2022 ? Or is there any free tutorials for laravel beginner to advanced ?
vishnu10kk - Jun 21

kaspera profile image
Sprout endless sites from a single Next.js and Umbraco instance
kaspera - Jul 14

areedev profile image
Tech companies that are fully remote:
Areeba Farooq - Jul 14


shani singh
Follow
FullStack Developer, PHP, LARAVEL, VueJs, Angular.
LOCATION
Nagpur, Maharashtra, India
EDUCATION
B.E.
WORK
CEO & MD at Sentriqo IT Solutions Pvt Ltd
JOINED
Feb 18, 2020
More from shani singh
How to login with username instead of email in Laravel ?
#laravel #webdev #beginners #tutorial
How to upload image in Laravel 9 ?
#laravel #webdev #beginners #programming
HOW TO VALIDATE FORM IN LARAVEL 9?
#laravel #webdev #beginners #programming
@extends('layouts.master')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Users</h1>
        <a href="{{route('users.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('users.update', ['user' => $user->id])}}">
                @csrf
                @method('PUT')
                <div class="form-group row">

                    {{-- Name --}}
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Name</label>
                        <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="exampleName" placeholder="Name" name="name" value="{{ old('name') ? old('name') : $user->name }}">

                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                    {{-- Email --}}
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Email</label>
                        <input type="text" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleEmail" placeholder="Email" name="email" value="{{ old('email') ? old('email') : $user->email }}">

                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    {{-- Phone Number --}}
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Phone Number</label>
                        <input type="text" class="form-control form-control-user @error('phone') is-invalid @enderror" id="exampleEmail" placeholder="Phone Number" name="phone" value="{{ old('phone') ? old('phone') : $user->phone }}">

                        @error('phone')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                </div>

                {{-- Save Button --}}
                <button type="submit" class="btn btn-success btn-user btn-block">
                    Update
                </button>

            </form>
        </div>
    </div>

</div>
