<x-layout>
	<h1 class="font-medium text-2xl mb-5">List of Users</h1>

	<div class="overflow-x-auto">
		<table class="min-w-full border-separate border-spacing-y-2">
			<thead>
				<tr class="text-left text-sm font-semibold text-gray-600">
					<th class="px-4 py-3">#</th>
					<th class="px-4 py-3">Name</th>
					<th class="px-4 py-3">Email</th>
					<th class="px-4 py-3">Created</th>
					<th class="px-4 py-3 text-right">Action</th>
				</tr>
			</thead>

			<tbody class="text-sm text-gray-700">
				@foreach ($users as $user)
					<tr class="bg-white shadow-sm rounded-lg hover:shadow-md transition">
						<td class="px-4 py-3 font-medium text-gray-900">
							{{ $user->id }}
						</td>

						<td class="px-4 py-3">
							{{ $user->first_name }} {{ $user->last_name }}
						</td>

						<td class="px-4 py-3 text-gray-600">
							{{ $user->email }}
						</td>

						<td class="px-4 py-3 text-gray-500">
							{{ $user->created_at->format('M d, Y') }}
						</td>

						<td class="px-4 py-3 text-right">
							<a href="{{ route('users.profile', $user) }}"
								class="inline-flex items-center gap-1 text-blue-600 hover:text-blue-800 font-medium">
								View
								<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
								</svg>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</x-layout>