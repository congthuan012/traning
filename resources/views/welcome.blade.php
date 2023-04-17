@extends('layout')
@section('title')
@endsection
@section('content')
    <div class="content">
        <div class="row menu">
            <div class="col-2 logo">
                <img src="{{ asset('assets/images/logo-rcvn.png') }}" alt="">
            </div>

            <div class="col-8">
                <div class="row h-100 align-items-center">
                    <div class="col menu-link">
                        <a href="#">
                            <span>Sản phẩm</span>
                        </a>
                    </div>


                    <div class="col menu-link active">
                        <a href="#">
                            <span>Sản phẩm</span>
                        </a>
                    </div>

                    <div class="col menu-link">
                        <a href="#">
                            <span>Sản phẩm</span>
                        </a>
                    </div>

                    <div class="col menu-link">
                        <a href="#">
                            <span>Sản phẩm</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-2 avatar">
                <img src="{{ asset('assets/images/person.png') }}" alt="">
                <div class="dropdown">
                    <span id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin <i
                            class="fa-solid fa-chevron-down"></i></span>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Đăng xuất</a>
                    </div>
                </div>
            </div>
        </div>

        <form>
            <div class="row">
                <div class="col-3 form-group">
                    <label for="inputPassword" class="col-form-label">Password</label>
                    <div class="">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-6 form-group text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        <div class="row align-items-center justify-content-center">

            @include('widgets.pagination')

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>

            @include('widgets.pagination')
        </div>
    </div>
@endsection
