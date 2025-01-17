@extends('master')
@section('title', 'Master Project')
@section('content-title')
@section('content')
<div class="col-md-10 text-dark overflow-auto" style="height:100vh;">
    <div class="row g-0 mt-3 ps-5">
        <div class="col-md-8">
          <div class="card shadow">
            <div class="card-header  text-center"><h1>Home</h1></div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Username</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1.</th>
                    <td>@Pejed</td>
                    <td>Lorem ipsum dolor sit amet, consiatis voluptates veacere soluta voluptatibus ab sapiente eaque molestias? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione voluptatem doloribus commodi minima neque ipsam dolorem nihil cum, pariatur repellat accusamus, facere quas autem numquam dicta iure at veritatis qui! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus magnam obcaecati mollitia quae dicta minus, repr</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#detailproject"><i class="bi bi-pencil-square"></i></a>
                        <a href="" class="btn btn-sm btn-danger mt-1" data-bs-toggle="modal"data-bs-target="#hapus"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2.</th>
                    <td>@Kcarbonara</td>
                    <td>keren banget kamu ayahah hayyuk sangat sigma stop yapping skidbi toilet rizz ohia ohayou </td>
                    <td>
                        <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#detailproject"><i class="bi bi-pencil-square"></i></a>
                        <a href="" class="btn btn-sm btn-danger mt-1" data-bs-toggle="modal"data-bs-target="#hapus"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                  
                  <tr>
                    <th scope="row">3.</th>
                    <td>@Majell</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum at enim deleniti pariatur. Distinctio asperiores placeat sequi facere libero saepe corrupti? Ea inventore amet voluptatum, dolor distinctio perferendis beatae deserunt?</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-pencil-square"></i></a>
                        <a href="" class="btn btn-sm btn-danger mt-1" data-bs-toggle="modal"data-bs-target="#hapus"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="modal fade" id="detailproject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Message</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                      <input type="text" class="form-control bg-light" id="" aria-describedby="">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-success">Save changes</button>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">You sure want to delete this Message?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger ">Delete</button>
                  </div>
                </div>
              </div>
          </div>
            </div>
          </div>
          </div>
        <div class="col-md-4">
          <div class="forms"></div>
            <form class="col-md-11">
              <div class="mb-3 ms-3">
                <div class="card shadow">
                  <div class="card-header"><h4>Forms</h4></div>
                  <div class="card-body">
                    <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                    <input type="email" class="form-control bg-light" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <label for="exampleInputEmail1" class="form-label fw-bold mt-1">Password</label>
                    <input type="password" class="form-control bg-light" id="exampleInputPassword1" aria-describedby="PasswordHelp" required>
                  </div>
                  <div class="mb-3">
                    <button type="submit" class="btn btn-primary ms-3">Login</button>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>  
  </div>
</div>

@endsection