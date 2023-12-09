
import Vuex from 'vuex';

export default new Vuex.Store({
    state: {
        cart: [],
        isAuth: false,
    },
    getters: {
        cartItems: state => state.cart,
    },
    mutations: {
        addToCart(state, product) {
            const existingProductIndex = state.cart.findIndex(item => item.id === product.id);

            if (existingProductIndex !== -1) {
                // Nếu sản phẩm đã tồn tại, cập nhật số lượng
                state.cart[existingProductIndex].qty += product.qty;
            } else {
                // Nếu sản phẩm chưa tồn tại, thêm mới vào giỏ hàng
                state.cart.push(product);
            }
            console.log('Sản phẩm đã được thêm vào giỏ hàng:', product);
        },
        updateCartItemQty(state, payload) {
            const { index, qty } = payload;
            if (state.cartItems && state.cartItems.length > 0 && state.cartItems[index]) {
                state.cartItems[index].qty = qty;
            }
        },
        updateAuthStatus(state, isAuthenticated) {
            state.isAuth = isAuthenticated;
        },
    },
});