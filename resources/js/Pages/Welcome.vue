<script setup lang="ts">
import { ref, reactive, computed } from "vue";
import { nextTick } from "vue";

const text = ref("Vue 3 Basics");
const isButtonDisabled = ref(false);
const number = ref(2);
const seen = ref(false);
const url = ref("https://laravel.com");
const message = ref("");
const count = ref(0);

async function increment() {
    count.value++;
    await nextTick();
}

function decrement() {
    if (number.value <= 0) {
        message.value = "Number cannot be less than zero";
        return;
    }

    number.value--;
}

const author = reactive({
    name: "John Doe",
    books: [
        "Vue 2 - Advanced Guide",
        "Vue 3 - Basic Guide",
        "Vue 4 - The Mystery",
    ],
});

const publishedBooks = computed(() => {
    return author.books.length > 0 ? "Yes" : "No";
});
</script>

<template>
    <div class="flex flex-col gap-5">
        <div>
            <h1 class="text-3xl">{{ text }}</h1>

            <span style="color: red">This should be red.</span>
        </div>

        <button
            :disabled="isButtonDisabled"
            class="p-3 px-5 bg-sky-500 text-white rounded mt-5 hover:bg-sky-700 w-fit"
        >
            {{ number }}
        </button>

        <!-- Directives -->
        <p v-if="seen">Now you see me</p>

        <a :href="url">Laravel</a>

        <button
            @click="increment()"
            class="p-3 px-5 bg-sky-500 text-white rounded mt-5 hover:bg-sky-700 w-fit"
        >
            {{ count }}
        </button>

        <button
            @click="decrement()"
            class="p-3 px-5 bg-red-500 text-white rounded mt-5 hover:bg-red-700 w-fit"
        >
            Less
        </button>

        <p v-if="message" class="bg-red-100 text-red-500 rounded px-5 py-2">
            {{ message }}
        </p>

        <p>Has published books:</p>
        <span>{{ publishedBooks }}</span>
    </div>
</template>
