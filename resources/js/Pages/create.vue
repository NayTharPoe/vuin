<script setup>
import { router, useForm } from '@inertiajs/vue3';

defineProps({
  errors: Object
})

const form = useForm({
  name: null,
  email: null,
  phone: null,
})

const submit = () => {
  router.post('/customers', form)
}
</script>


<template>
  <div class="card col-6 offset-3">
  <div class="card-header">
    Create Customer
  </div>
  <div class="card-body">
    <form @submit.prevent="submit">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" id="name" v-model="form.name" class="form-control" aria-describedby="emailHelp">
        <div class="text-danger text-xs" v-if="errors.name">{{ errors.name }}</div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" id="email" v-model="form.email" class="form-control">
        <div class="text-danger text-xs" v-if="errors.email">{{ errors.email }}</div>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="number" id="phone" v-model="form.phone" class="form-control">
        <div class="text-danger text-xs" v-if="errors.phone">{{ errors.phone }}</div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</template>