<x-layout>
	<h1 class="text-2xl font-medium">User Profile</h1>

	<div>
		<div class="p-4 mt-4 bg-gray-100">
			<h2 class="font-medium text-xl mb-2">{{ $user->first_name . ' ' . $user->last_name . ' - ' . $user->id }}
			</h2>
			<p class="text-gray-700">Email: {{ $user->email }}</p>
			<p class="text-gray-700">Joined: {{ $user->created_at }}</p>
			<form action="{{ route('users.destroy', $user) }}" method="POST">
				@csrf
				@method('DELETE')
				<button class="text-red-400 bg-red-100 px-3 py-2">Delete User</button>
			</form>
		</div>
	</div>
</x-layout>