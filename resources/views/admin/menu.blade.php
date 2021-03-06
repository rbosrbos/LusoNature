<div class="flex m-0 flex-wrap justify-center">
    <div
        class="admin-menu relative z-10 bg-green-700 px-2 sm:px-6 lg:px-12 hover:bg-green-500 shadow-inner transition duration-100 py-2 text-white rounded-bl-lg">
        News
        <div class="admin-submenu absolute left-0 w-full flex items-center overflow-hidden flex-col">
            <a href="{{ route('admin.news.create') }}"
                class="text-white text-green-400 hover:text-white hover:bg-green-500 w-full text-center py-1 block">Create</a>
            <a href="{{ route('admin.news.edit') }}"
                class="text-white text-green-400 hover:text-white hover:bg-green-500 w-full text-center py-1 block">Edit/Delete</a>
        </div>
    </div>
    <div
        class="admin-menu relative z-10 bg-green-700 px-2 sm:px-6 lg:px-12 hover:bg-green-500 shadow-inner transition duration-100 py-2 text-white">
        Places
        <div class="admin-submenu absolute left-0 w-full flex items-center overflow-hidden flex-col">
            <a href="{{ route('admin.places.edit',0) }}"
                class="text-white text-green-400 hover:text-white hover:bg-green-500 w-full text-center py-1 block">New
                Submissions</a>
            <a href="{{ route('admin.places.edit',1) }}"
                class="text-white text-green-400 hover:text-white hover:bg-green-500 w-full text-center py-1 block">Management</a>
        </div>
    </div>
    <div
        class="admin-menu relative z-10 bg-green-700 px-2 sm:px-6 lg:px-12 hover:bg-green-500 shadow-inner transition duration-100 py-2 text-white">
        Users
        <div class="admin-submenu absolute left-0 w-full flex items-center overflow-hidden flex-col">
            <a href="{{route('admin.users')}}"
                class="text-white text-green-400 hover:text-white hover:bg-green-500 w-full text-center py-1 block">List</a>
        </div>
    </div>
    <div
        class="admin-menu relative z-10 bg-green-700 px-2 sm:px-6 lg:px-12 hover:bg-green-500 shadow-inner transition duration-100 py-2 text-white">
        Comments
        <div class="admin-submenu absolute left-0 w-full flex items-center overflow-hidden flex-col">
            <a href="{{route('comment.index.filtered','pending')}}"
                class="text-white text-green-400 hover:text-white hover:bg-green-500 w-full text-center py-1 block">New Submissions</a>
            <a href="{{route('comment.index.filtered','aproved')}}"
                class="text-white text-green-400 hover:text-white hover:bg-green-500 w-full text-center py-1 block">Management</a>
        </div>
    </div>
    <div
        class="admin-menu relative z-10 bg-green-700 px-2 sm:px-6 lg:px-12 hover:bg-green-500 shadow-inner transition duration-100 py-2 text-white rounded-br-lg">
        <form id="logout" action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <a onclick="$('#logout').submit();">Logout</a>
        </form>
    </div>
</div>
