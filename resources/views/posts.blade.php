<x-layout>
	<h1 class="font-medium text-2xl mb-5">List of Posts</h1>

	<div class="overflow-x-auto">
		<table class="min-w-full border-separate border-spacing-y-2">
			<thead>
				<tr class="text-left text-sm font-semibold text-gray-600">
					<th class="px-4 py-3">#</th>
					<th class="px-4 py-3">Name</th>
					<th class="px-4 py-3">Title</th>
					<th class="px-4 py-3">Content</th>
					<th class="px-4 py-3">Created</th>
				</tr>
			</thead>

			<tbody class="text-sm text-gray-700">
				@foreach ($posts as $post)
					<tr class="bg-white shadow-sm rounded-lg hover:shadow-md transition">
						<td class="px-4 py-3 font-medium text-gray-900">
							{{ $post->id }}
						</td>

						<td class="px-4 py-3">
							{{ $post->user->first_name }} {{ $post->user->last_name }}
						</td>

						<td class="px-4 py-3 text-gray-600">
							{{ $post->title }}
						</td>

						<td class="px-4 py-3 text-gray-600">
							{{ $post->content }}
						</td>

						<td class="px-4 py-3 text-gray-500">
							{{ $post->created_at->format('M d, Y') }}
						</td>

					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</x-layout>