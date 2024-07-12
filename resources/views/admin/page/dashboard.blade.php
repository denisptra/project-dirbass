@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Welcome {{ Auth::user()->name }} </h3>
                <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
            </div>
            <div class="col-12 col-xl-4">
                <div class="justify-content-end d-flex">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                        <button class="btn btn-sm btn-light bg-white " type="button" id="dropdownMenuDate2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="mdi mdi-calendar"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
            <div class="card-people mt-auto">
                <img src="{{ asset('dist') }}/images/dashboard/people.svg" alt="people">
                <div class="weather-info">
                    <div class="d-flex">
                        <div>
                            <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                        </div>
                        <div class="ml-2">
                            <h4 class="location font-weight-normal">Jakarta</h4>
                            <h6 class="font-weight-normal">Indonesia</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin transparent">
        <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-tale">
                    <div class="card-body">
                        <p class="mb-4">Users</p>
                        <p class="fs-30 mb-2">{{ DB::table('users')->count() }}
                        </p>
                        @php
                        $accounts = DB::table('users');
                        $totalUsers = $accounts->count();
                        $percentage = (95 * $totalUsers / 100);
                        @endphp
                        <p>{{ number_format($percentage, 2) }}% ( Percentage )</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                    <div class="card-body">
                        <p class="mb-4">Male</p>
                        <p class="fs-30 mb-2">{{ DB::table('males')->count() }}</p>
                        <p>( Data Complete )
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                <div class="card card-light-blue">
                    <div class="card-body">
                        <p class="mb-4">News</p>
                        <p class="fs-30 mb-2">{{ DB::table('news')->count() }}</p>
                        <p>( News Post )</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card transparent">
                <div class="card card-light-danger">
                    <div class="card-body">
                        <p class="mb-4">Number of Clients</p>
                        <p class="fs-30 mb-2">47033</p>
                        <p>0.22% (30 days)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card mb-5">
            <div class="card-body">
                <h4 class="card-title">To Do Lists</h4>
                <div class="list-wrapper pt-2">
                    <ul class="d-flex flex-column-reverse todo-list todo-list-custom" id="todo-list">
                        <li>
                            <div class="form-check form-check-flat">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox">
                                    Berjuang Juga Butuh Makan
                                    <i class="input-helper"></i></label>
                            </div>
                            <i class="remove ti-close"></i>
                        </li>
                        <li>
                            <div class="form-check form-check-flat">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox">
                                    Aku Tidur Dulu ya
                                    <i class="input-helper"></i></label>
                            </div>
                            <i class="remove ti-close"></i>
                        </li>
                    </ul>
                </div>
               
                <div class="add-items d-flex mb-0 mt-2">
                    <input type="text" class="form-control todo-list-input" placeholder="Add new task"
                        id="new-task-input">
                    <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent" id="add-task-btn"><i
                            class="icon-circle-plus"></i>
                    </button>
                </div>
            </div>
        </div>
        <script>
            const button = document.getElementById('dropdownMenuDate2');

    function updateDate() {
        const date = new Date();
        const day = date.toLocaleDateString('en-US', {
            weekday: 'long'
        });
        const month = date.toLocaleDateString('en-US', {
            month: 'long'
        });
        const dayOfMonth = date.getDate();
        const year = date.getFullYear();

        button.innerHTML = `${day}, ${dayOfMonth} ${month} ${year}`;
    }

    updateDate();

    // Update the date every 1 second
    setInterval(updateDate, 1000);

        </script>
         <script>
            const todoList = document.getElementById('todo-list');
          
            // Load tasks from local storage when the page loads
            loadTasksFromLocalStorage();
          
            function loadTasksFromLocalStorage() {
              const tasks = JSON.parse(localStorage.getItem('tasks') || '[]');
              tasks.forEach((task) => {
                const listItem = document.createElement('li');
                listItem.innerHTML = `
                  <div class="form-check form-check-flat">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" ${task.completed ? 'checked' : ''}>
                      ${task.text}
                      <i class="input-helper"></i>
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                `;
                if (task.completed) {
                  listItem.classList.add('completed');
                }
                todoList.appendChild(listItem);
              });
            }
          
            // Add event listener to the remove button
            todoList.addEventListener('click', (e) => {
              if (e.target.classList.contains('remove')) {
                const listItem = e.target.parentNode;
                const taskText = listItem.querySelector('.form-check-label').textContent.trim();
                todoList.removeChild(listItem);
                removeTaskFromLocalStorage(taskText);
              } else if (e.target.classList.contains('checkbox')) {
                const listItem = e.target.closest('li');
                const taskText = listItem.querySelector('.form-check-label').textContent.trim();
                const tasks = JSON.parse(localStorage.getItem('tasks') || '[]');
                const index = tasks.findIndex((task) => task.text === taskText);
                if (index !== -1) {
                  tasks[index].completed = !tasks[index].completed;
                  localStorage.setItem('tasks', JSON.stringify(tasks));
                }
                listItem.classList.toggle('completed');
              }
            });
          
            function removeTaskFromLocalStorage(taskText) {
              const tasks = JSON.parse(localStorage.getItem('tasks') || '[]');
              const index = tasks.findIndex((task) => task.text === taskText);
              if (index !== -1) {
                tasks.splice(index, 1);
              }
              localStorage.setItem('tasks', JSON.stringify(tasks));
            }
          
            // Initialize tasks in local storage
            const initialTasks = [
              { text: 'Berjuang Juga Butuh Makan', completed: false },
              { text: 'Aku Tidur Dulu ya', completed: false }
            ];
            localStorage.setItem('tasks', JSON.stringify(initialTasks));
        </script>

        @endsection