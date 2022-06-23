<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="row mt-4">
                <div class="col-md-12 p-3">
                    <div class="card mb-4">
                        <div class="card-body p-3">
                            <div class="row align-items-center mb-3">
                                <div class="col-6 text-start">
                                    <a href="{{route('projects', 'add')}}" class="btn bg-gradient-primary">+New Food </a>
                                </div>
                                <div class="col-6 text-end">
                                    <div class="dropstart">
                                        <a href="javascript:;" class="text-secondary" id="dropdownDesignCard"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-lg-start px-2 py-3"
                                            aria-labelledby="dropdownDesignCard">
                                            <li><a class="dropdown-item border-radius-md" href="{{route('portal-users', 3)}}">Customers</a>
                                            </li>
                                            <li><a class="dropdown-item border-radius-md" href="{{route('portal-users', 2)}}">Staffs</a></li>
                                            <li>
                                                <hr class="dropdown-divider ">
                                            </li>
                                            <li><a class="dropdown-item border-radius-md text-danger"
                                                    href="javascript:;">Reject Order</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                            <table class="table align-items-center mb-0" id="restaurants-list">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Image
                                        </th> 
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                             Name
                                        </th> 
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Cost
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Type
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Detail
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Calories
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Ingredient
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Restaurant
                                        </th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($projects as $project)
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>
                                                <img src="{{$project->img_src}}" alt="" style="width:50px">
                                            </td>
                                            <td>{{$project->name}}</td>
                                            <td>{{$project->cost}}</td>
                                            <td>{{$project->type}}</td>
                                            <td>{{$project->detail}}</td>
                                            <td>{{$project->calories}}</td>
                                            <td>{{$project->ingredient}}</td>
                                            <td>{{$project->restaurant->name}}</td>
                                            <td>
                                                <a href="{{route('projects', [$project->id, 'edit'])}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Food">
                                                    <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{route('delete-project',  $project->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')        
                                                    <button href="" class="mx-3 border-0" data-bs-toggle="tooltip" data-bs-original-title="Delete user">
                                                        <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        <tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            <hr class="horizontal dark">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
<script src="../../../assets/js/plugins/datatables.js"></script>
<script>
  if (document.getElementById('restaurants-list')) {
    const dataTableSearch = new simpleDatatables.DataTable("#restaurants-list", {
      searchable: true,
      fixedHeight: false,
      perPage: 5
    });

    document.querySelectorAll(".export").forEach(function(el) {
      el.addEventListener("click", function(e) {
        var type = el.dataset.type;

        var data = {
          type: type,
          filename: "soft-ui-" + type,
        };

        if (type === "csv") {
          data.columnDelimiter = "|";
        }

        dataTableSearch.export(data);
      });
    });
  };
</script>
