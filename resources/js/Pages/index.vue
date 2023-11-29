<script setup>
import {router} from '@inertiajs/vue3'

defineProps({
  customers: Object
})

const destroy = (id) => {
  router.delete('/customers/' + id)
}

const edit = (id) => {
  router.get('/customers/' + id + '/edit')
}

const view = (id) => {
  router.get('/customers/' + id + '/detail')
}

</script>

<template>
  <div class="card col-5 offset-3">
    <div v-if="$page.props.flash.message" class="alert alert-primary" role="alert">
      {{ $page.props.flash.message }}
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="customer in customers" :key="customer.id">
          <td>{{ customer.name }}</td>
          <td>{{ customer.email }}</td>
          <td>
            <button type="button" @click.prevent="view(customer.id)" class="btn btn-sm btn-light">View</button>
            <button type="button" @click.prevent="edit(customer.id)" class="btn btn-sm btn-info mx-2">Edit</button>
            <button type="button" @click.prevent="destroy(customer.id)" class="btn btn-sm btn-danger">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>